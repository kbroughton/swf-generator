<?php

error_reporting(0);

/**
 * Full path to mxmlc file of Adobe Flex e.g  Linux /opt/flex/bin/mxmlc Windows c:/flex/bin/mxmlc.
 * @var string
 */

$mxmlc_path = "C:/abdoe/flex/mxmlc";

require_once 'as_obj.php';

$as_file = new As_file();

if (isset($_GET['file_path'])) {
    header('content-type:application/x-shockwave-flash');
    header('X-Frame-Options: deny');
    header('X-XSS-Protection: 1; mode=block');
    header('X-Content-Type-Options: nosniff');

    $re1 = '(files)'; # Word 1
    $re2 = '(\\/)'; # Any Single Character 1
    $re3 = '.*?'; # Non-greedy match on filler
    $re4 = '((?:[a-z][a-z]*[0-9]+[a-z0-9]*))'; # Alphanum 1
    $re5 = '(\\/)'; # Any Single Character 2
    $re6 = '.*?'; # Non-greedy match on filler
    $re7 = '((?:[a-z][a-z\\.\\d_]+)\\.(?:[a-z\\d]{3}))(?![\\w\\.])'; # File Name 1

    $path = $_GET['file_path'];
    $file_parts = pathinfo($path);

    if (preg_match_all("/" . $re1 . $re2 . $re3 . $re4 . $re5 . $re6 . $re7 . "/is", $path, $matches) && $file_parts['extension'] === 'swf') {

        $name = basename($path);
        header("Content-Disposition: attachment; filename='$name'");
        echo file_get_contents(substr(__FILE__, 0, -12) . $path); //file_get_contents($path);
        exit();
    } else {
        header('Content-Type:application/json');
        $as_file->error = "Invaild file path.";
        $as_json = json_encode($as_file);
        die($as_json);
    }
} else {

/**
 * New AS file object to store file attributes.
 * @var object
 */

    try {
        if (!file_exists($mxmlc_path)) {
            throw new Exception('Mxmlc path does not exist!');
        }
    } catch (Exception $e) {

        $as_file->error = $e->getMessage();
        $json_as = json_encode($as_file);

        //  die($json_as);
    }

/**
 * upload path for AS files.
 * @var string
 */

    $uploaded_file_path = "files/";

// on upload
    if (!empty($_FILES['file'])) {

        /**
         * New AS file object to store file attributes.
         * @var string
         */

        $filename = basename($_FILES['file']['name']);
        $file_parts = pathinfo($filename);

        if ($file_parts['extension'] !== 'as') {

            $as_file->error = "Only AS file are allowed!";
            $json_as = json_encode($as_file);
            die($json_as);

        } else {

            $filename = basename($_FILES['file']['name'], '.as') . ".swf";
            if (!preg_match('/^[a-zA-Z0-9]+/', basename($_FILES['file']['name'], '.as'))) {
                $as_file->error = "Invaild file name.";
                $json_as = json_encode($as_file);

                die($json_as);

            } else {

                $random_name = md5(rand(0, 10000000));
                mkdir($uploaded_file_path . $random_name);

                $uploaded_file_path = $uploaded_file_path . $random_name . '/' . basename($_FILES['file']['name']);

                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaded_file_path)) {

                    $full_dir = substr(__FILE__, 0, -12);

                    system($mxmlc_path . " " . $full_dir . $uploaded_file_path);

                    $as_file->status = "Uploaded";
                    $as_file->name = $filename;
                    $as_file->url = "download.php?file_path=" . substr($uploaded_file_path, 0, -3) . ".swf";
                    $as_file->error = NULL;

                    $json_as = json_encode($as_file);

                    echo $json_as;

                } else {
                    $as_file->error = "Unable to upload file!";
                    $as_json = json_encode($as_file);
                    die($as_json);
                }
            }
        }
    }
}
