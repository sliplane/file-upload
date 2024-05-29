<?php
if (isset($_POST['submit'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (optional)
    $allowedTypes = array("jpg", "png", "jpeg", "gif", "pdf");
    if (!in_array($fileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file ". basename($_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
