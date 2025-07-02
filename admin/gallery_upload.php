


<?php
include('../connect.php');


if (isset($_POST['upload'])) {
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $alt_text = mysqli_real_escape_string($conn, $_POST['alt_text']);

    $target_dir = "../uploads/";
    $errors = [];

    // Function to generate clean, lowercase 3–4 word unique filenames
    function generateCleanFilename($originalName) {
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);
        $name = pathinfo($originalName, PATHINFO_FILENAME);

        // Convert to lowercase, remove unwanted characters, split words
        $name = strtolower(preg_replace('/[^a-z0-9]+/', '-', $name));
        $words = array_filter(explode('-', $name)); // Remove empty parts

        // Take max 3–4 words
        $selectedWords = array_slice($words, 0, rand(3, 4));
        $shortName = implode('-', $selectedWords);

        // Append unique ID to prevent overwriting
        $uniqueID = substr(md5(uniqid()), 0, 6);
        return $shortName . '-' . $uniqueID . '.' . $ext;
    }

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $originalName = $_FILES['images']['name'][$key];
        $cleanName = generateCleanFilename($originalName);
        $targetPath = $target_dir . $cleanName;

        // Move uploaded file
        if (move_uploaded_file($tmp_name, $targetPath)) {
            // Save to DB
            $stmt = $conn->prepare("INSERT INTO gallery (event_name, description, image_name, alt_text) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $event_name, $description, $cleanName, $alt_text);
            $stmt->execute();
        } else {
            $errors[] = "Failed to upload " . htmlspecialchars($originalName);
        }
    }

    if (empty($errors)) {
        // echo "<div class='alert alert-success'>Images uploaded successfully.</div>";
                    echo "<script>alert('Image uploaded successfully!'); window.location.href='gallery_view.php';</script>";

    } else {
        // echo "<div class='alert alert-danger'>" . implode("<br>", $errors) . "</div>";
                    echo "<script>alert('Could not upload image.'); window.location.href='gallery_list.php';</script>";
    }
    // else {
    //     echo "<script>alert('Error uploading file.'); window.location.href='gallery_list.php';</script>";
    // }
}
?>




 