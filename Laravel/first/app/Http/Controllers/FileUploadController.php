<?php

// File Upload Controller
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] === 0) {
        $file = $_FILES['uploaded_file'];
        
        // Get the file properties
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        
        // Define allowed file types
        $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        // Validate file type
        if (in_array($fileExt, $allowedTypes)) {
            // Validate file size (optional, here 5MB max)
            if ($fileSize <= 5 * 1024 * 1024) {
                // Generate unique name and define upload directory
                $newFileName = uniqid('', true) . "." . $fileExt;
                $uploadDir = 'uploads/';
                
                // Move the file to the upload directory
                if (move_uploaded_file($fileTmpName, $uploadDir . $newFileName)) {
                    echo "File uploaded successfully!";
                } else {
                    echo "Error: Failed to move uploaded file.";
                }
            } else {
                echo "Error: File is too large.";
            }
        } else {
            echo "Error: Invalid file type.";
        }
    } else {
        echo "Error: No file uploaded or there was an error during upload.";
    }
}

?>

<!-- HTML Form to upload file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" required>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>
