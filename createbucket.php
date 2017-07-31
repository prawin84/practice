<?php
//copyright 2017 - Cloud Freaks.

//connection string
include 'connecttoaws.php';

// Create a unique bucket name
$bucket = uniqid("acloudfreak", true);

// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));

//HTML to Create our webpage
echo "<h1 align=\"center\">Hello Cloud Freaks!</h1>";
echo "<div align = \"center\"><img src=\"https://s3.eu-west-2.amazonaws.com/initbucket006/cloudfreaklogo.png\"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";
?>
