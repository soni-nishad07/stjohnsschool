<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Gallery</title>
    <?php include 'link.php'; ?>

</head>
<body>

<?php include 'nav.php'; ?>

<div class="container mt-5">
    <?php
    include('connect.php');

    if (!isset($_GET['event'])) {
        echo "<h4 class='text-center text-danger'>Invalid event selected.</h4>";
        exit;
    }

    $event = mysqli_real_escape_string($conn, $_GET['event']);
    $query = "SELECT * FROM gallery WHERE event_name = '$event' ORDER BY uploaded_at DESC";
    $result = mysqli_query($conn, $query);
    ?>

    <h2 class="text-center mb-4"><?= htmlspecialchars($event) ?> - Full Gallery</h2>
    <div class="event-gallery">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="event-gallery-item">
                
            <img src="uploads/<?= htmlspecialchars($row['image_name']) ?>" 
     alt="<?= htmlspecialchars($row['alt_text']) ?>" 
     onclick="openLightbox(this.src, '<?= htmlspecialchars($row['description']) ?>')" 
     style="cursor: pointer;">

                <div class="desc"><?= htmlspecialchars($row['description']) ?></div>
            </div>
        <?php } ?>
    </div>
</div>







<!-- Lightbox Modal -->
<div id="lightboxModal" class="lightbox-modal" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightboxImage">
    <div id="lightboxCaption" class="lightbox-caption"></div>
</div>







<script>
function openLightbox(src, caption) {
    document.getElementById('lightboxImage').src = src;
    document.getElementById('lightboxCaption').innerText = caption;
    document.getElementById('lightboxModal').style.display = 'block';
}

function closeLightbox() {
    document.getElementById('lightboxModal').style.display = 'none';
}
</script>




<?php include 'footer.php'; ?>
</body>
</html>
