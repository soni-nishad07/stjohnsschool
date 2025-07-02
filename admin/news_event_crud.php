


<?php include '../connect.php';

function uploadImages($files) {
  $uploaded = [];
  foreach ($files['name'] as $key => $name) {
    if ($files['error'][$key] === 0) {
      $tmp = $files['tmp_name'][$key];
      $filename = time() . "_" . basename($name);
      $dest = "../uploads/" . $filename;
      move_uploaded_file($tmp, $dest);
      $uploaded[] = $dest;
    }
  }
  return implode(',', $uploaded);
}

// Insert
if (isset($_POST['save'])) {
  $gallery = uploadImages($_FILES['images']);
  $stmt = $conn->prepare("INSERT INTO news_events (title, description, category, date, gallery) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $_POST['title'], $_POST['description'], $_POST['category'], $_POST['date'], $gallery);
  $stmt->execute();
  header("Location: news_event_show.php");
}

// Update
if (isset($_POST['update'])) {
  $gallery = '';
  if (!empty($_FILES['images']['name'][0])) {
    $gallery = uploadImages($_FILES['images']);
  } else {
    $gallery = $_POST['existing_gallery'] ?? '';
  }

  $stmt = $conn->prepare("UPDATE news_events SET title=?, description=?, category=?, date=?, gallery=? WHERE id=?");
  $stmt->bind_param("sssssi", $_POST['title'], $_POST['description'], $_POST['category'], $_POST['date'], $gallery, $_POST['id']);
  $stmt->execute();
  header("Location: news_event_show.php");
}

// Delete
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("DELETE FROM news_events WHERE id=$id");
  header("Location: news_event_show.php");
}
