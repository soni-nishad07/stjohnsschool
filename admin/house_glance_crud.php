



<?php
include('../connect.php');

$uploadDir = "../uploads/house/";
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Save (Insert)
if (isset($_POST['save'])) {
    $house_name = $_POST['house_name'];
    $description = $_POST['description'];

    // Image Upload
    $imageName = '';
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . '_' . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    }

    $stmt = $conn->prepare("INSERT INTO house_glance (house_name, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $house_name, $description, $imageName);
    $stmt->execute();
    header("Location: house_glance_manage.php");
    exit();
}

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $house_name = $_POST['house_name'];
    $description = $_POST['description'];

    // Get existing image
    $stmt = $conn->prepare("SELECT image FROM house_glance WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $existing = $stmt->get_result()->fetch_assoc();
    $oldImage = $existing['image'];

    // Handle image upload
    $imageName = $oldImage;
    if (!empty($_FILES['image']['name'])) {
        // Delete old image
        if ($oldImage && file_exists($uploadDir . $oldImage)) {
            unlink($uploadDir . $oldImage);
        }

        $imageName = time() . '_' . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    }

    $stmt = $conn->prepare("UPDATE house_glance SET house_name = ?, description = ?, image = ? WHERE id = ?");
    $stmt->bind_param("sssi", $house_name, $description, $imageName, $id);
    $stmt->execute();
    header("Location: house_glance_manage.php");
    exit();
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Get and delete image
    $stmt = $conn->prepare("SELECT image FROM house_glance WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    if ($result && $result['image'] && file_exists($uploadDir . $result['image'])) {
        unlink($uploadDir . $result['image']);
    }

    // Delete record
    $stmt = $conn->prepare("DELETE FROM house_glance WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: house_glance_manage.php");
    exit();
}
?>
