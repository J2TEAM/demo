<?php
// DO NOT USE THIS CODE IN PRODUCTION
// this is simple file upload example,
// we need to add more security checks
// to prevent uploading php files
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadPath = 'uploads/' . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Failed to upload file.';
    }
}
