# SWF Generator

A web app to create SWF files from ActionScript code using Flex SDK.

## Getting Started

This is one of my oldest projects I just updated things and wanted to share here, maybe someone needs it.

## Vesrion 

0.1 

### Prerequisites

You will need Flex SDK, here is how you can install it. 

#### Windows 

1- Download Adoble Flex from [here](https://www.adobe.com/devnet/flex/flex-sdk-download.html).  

2- Export Files, then move them to C.


#### Linux 

You can install Adobe Flex by the following commands: 

```
apt-get install openjdk-6-jdk
mkdir /opt/flex 
cd /opt/flex/ 
wget http://download.macromedia.com/pub/flex/sdk/flex_sdk_4.6.zip
unzip flex_sdk_4.6.zip 
chmod -R a+rx /opt/flex/
echo 'export PATH=/opt/flex/bin:$PATH' >> ~/.bashrc
chmod 755 bin/mxmlc
```


### Installing

Change the following path:
```
$mxmlc_path = "C:/abdoe/flex/mxmlc";
```

To (Linux)

```
$mxmlc_path = "/opt/flex/bin/mxmlc";
```
To (Windows)

```
$mxmlc_path = "C:/abdoe/flex/mxmlc";
```

Make sure that the path is vaild.

## Authors

* **Abdullah Hussam** [Ahussam](https://github.com/ahussam)

## Screenshot 

![swfGen](https://raw.githubusercontent.com/ahussam/swf-generator/master/SwfGen.png)




