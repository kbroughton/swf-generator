<!doctype html>
<html>

<head>
    <title>SWF - Generator V 0.1</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {
            background-color: #f0f0f2;
            margin: 0;
            padding: 0;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        div {
            width: 600px;
            margin: 5em auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 1em;
        }

        a:link,
        a:visited {
            color: #38488f;
            text-decoration: none;
        }

        @media (max-width: 700px) {
            body {
                background-color: #A3E4D7;
            }
            div {
                width: auto;
                margin: 0 auto;
                border-radius: 0;
                padding: 1em;
            }
        }

        input[type="file"] {
            display: none;
        }

        .file {
            padding: 10px;
            background: green;
            border: 10px;
            border-color: #fff;
            box-shadow: 3em;
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .file:hover {
            background-color: rgb(31, 37, 22);
        }

        footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <center>
            <h1>SWF - Generator V 0.1</h1><br>
            <form id="test">
                <input type="file" name="file" id="file" />
                <label class="file" for="file">Upload AS file</label>
                <br><br>
                <button type="submit" form="form1" value="Submit" class="btn btn-default" onclick="upload(this)">Submit</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" form="form1" value="Submit" class="btn btn-default">&nbsp;&nbsp;Reset&nbsp;&nbsp;</button>
                <br><br><br><span id="status"></span> &nbsp;&nbsp;&nbsp;&nbsp; <span id="url"></span></a>
            </form>
        </center>

    </div>
    <script>
        function upload(input) {
            var xhr = new XMLHttpRequest();
            /*
            xhr.upload.onprogress = function (e) {
                console.log(e.loaded, e.total)
            }
            xhr.upload.onload = function (e) {
                console.log('file upload')
            }
            */
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var resp = JSON.parse(xhr.responseText);
                    if (resp.error === null) {

                    document.getElementById('status').innerText = 'Status: '+resp.status; 
                    document.getElementById('url').innerHTML = 'Download : <a href=/swf-generator/'+resp.url+'>' + resp.name +'</a>';

                    }else{
                    
                    document.getElementById('status').innerText = resp.status; 

                    alert(resp.error);

                    }
                }
            }
            xhr.open("POST", "/swf-generator/download.php", true);
            xhr.send(new FormData(input.parentElement));
        }
    </script>
    <footer><span style="color:green;">SWF - Generator V 0.1 By Abdullah Hussam</footer>
</body>

</html>