<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

.file_upload{

margin-left:90px;

}

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #DFF2BF;
            color: #4F8A10;
            border: 1px solid #D6E9C6;
        }

        .error {
            background-color: #FFBABA;
            color: #D8000C;
            border: 1px solid #FFA8A8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Image Upload</h1>

        <?php
        if (isset($_FILES['image'])) {
            $targetDirectory = 'uploads/';
            $targetFile = $targetDirectory . basename($_FILES['image']['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if (isset($_POST['submit'])) {
                $check = getimagesize($_FILES['image']['tmp_name']);
                if ($check !== false) {
                    echo '<div class="message success">File is an image - ' . $check['mime'] . '.</div>';
                    $uploadOk = 1;
                } else {
                    echo '<div class="message error">File is not an image.</div>';
                    $uploadOk = 0;
                }
            }

            if (file_exists($targetFile)) {
                echo '<div class="message error">Sorry, file already exists.</div>';
                $uploadOk = 0;
            }

            if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
                echo '<div class="message error">Sorry, your file is too large.</div>';
                $uploadOk = 0;
            }

            $allowedFormats = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowedFormats)) {
                echo '<div class="message error">Sorry, only JPG, JPEG, PNG, and GIF files are allowed.</div>';
                $uploadOk = 0;
            }

            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    echo '<div class="message success">The file ' . basename($_FILES['image']['name']) . ' has been uploaded.</div>';
                } else {
                    echo '<div class="message error">Sorry, there was an error uploading your file.</div>';
                }
            }
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" class="file_upload" />
            <input type="submit" name="submit" value="Upload" />
        </form>
    </div>
</body>
</html>
