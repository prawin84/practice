<?php
//Copyright 2017 A Cloud Freak

//Connection string
include 'connecttoaws.php';

/*
Files in Amazon S3 are called "objects" and are stored in buckets. A specific
object is referred to by its key (or name) and holds data. In this file
we create an object called acloudguru.txt that contains the data 
'Hello Cloud Freaks!'
and we upload/put it into our newly created bucket.
*/

//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'cloudfreak.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hello Cloud Freaks!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><img src=\"https://s3.eu-west-2.amazonaws.com/initbucket006/cloudfreaklogo.png\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>
