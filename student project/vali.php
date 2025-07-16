<?php
$message = "";
$imagePath = "";

if (isset($_POST['btnsubmit'])) {
    $file = $_FILES['myfile'];
    $tmp_name = $file['tmp_name'];
    $name = basename($file['name']);
    $type = $file['type'];
    $size = $file['size'];
    $error = $file['error'];
    $uploadDir = 'image/';

    // Check if file is selected
    if (!empty($name)) {
        // Optional: validate image type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($type, $allowedTypes)) {
            $message = " Only JPG, PNG, and GIF files are allowed.";
        } elseif ($error !== 0) {
            $message = " File upload error.";
        } else {
            // Optional: make filename unique
            $newName = time() . "_" . $name;
            $destination = $uploadDir . $newName;
            if (move_uploaded_file($tmp_name, $destination)) {
                $message = " File uploaded successfully!";
                $imagePath = $destination;
            } else {
                $message = " Failed to upload file.";
            }
        }
    } else {
        $message = " Please select a file.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; }
        .box { width: 500px; margin: 20px auto; background: #fff; padding: 20px; box-shadow: 0 0 8px #aaa; border-radius: 6px; }
        img { margin-top: 20px; border: 1px solid #ccc; }
        .msg { margin: 10px 0; padding: 10px; background: #e2e3e5; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Upload an Image</h2>
        <?php if ($message) echo "<div class='msg'>{$message}</div>"; ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" required><br><br>
            <input type="submit" name="btnsubmit" value="Upload">
        </form>

        <?php if ($imagePath): ?>
            <img src="<?= $imagePath ?>" width="300px">
        <?php endif; ?>

        <?php if (isset($_POST['btnsubmit']) && isset($file)): ?>
            <h3>File Details</h3>
            <p><strong>Filename:</strong> <?= htmlspecialchars($file['name']) ?></p>
            <p><strong>Type:</strong> <?= htmlspecialchars($file['type']) ?></p>
            <p><strong>Size:</strong> <?= $file['size'] ?> bytes</p>
            <p><strong>Temporary Name:</strong> <?= $file['tmp_name'] ?></p>
            <p><strong>Error Code:</strong> <?= $file['error'] ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
