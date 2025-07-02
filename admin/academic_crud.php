

<?php
include('../connect.php');

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO academic_approach (title, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();

    header("Location: academic_show.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE academic_approach SET title = ?, description = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $description, $id);
    $stmt->execute();

    header("Location: academic_show.php");
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM academic_approach WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: academic_show.php");
    exit();
}
