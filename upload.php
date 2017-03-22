<?php
// include file containing summarize function
include 'summarize.php';

$uploads_dir = 'uploads';
foreach ($_FILES['fileToUpload']['error'] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['fileToUpload']['tmp_name'][$key];
        $name = basename($_FILES['fileToUpload']['name'][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        summarize();
    }
}
echo "<a href='../summary.txt'>Summary</a>";
