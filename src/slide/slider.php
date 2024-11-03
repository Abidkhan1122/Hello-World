<?php
// Sample array of image paths
$images = [
    'school1.jpg',
    'school2.jpg',
    'school3.jpg',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        * { box-sizing: border-box; }
        .slider { position: relative; max-width: 600px; margin: auto; overflow: hidden; }
        .slides { display: flex; transition: transform 0.5s ease; }
        .slide { min-width: 100%; }
        img { width: 100%; }
        .navigation { position: absolute; top: 50%; width: 100%; display: flex; justify-content: space-between; }
        .prev, .next { background-color: rgba(255, 255, 255, 0.7); border: none; cursor: pointer; }
    </style>
</head>
<body>

<div class="slider">
    <div class="slides">
        <?php foreach ($images as $image): ?>
            <div class="slide"><img src="<?php echo $image; ?>" alt="Slide Image"></div>
        <?php endforeach; ?>
    </div>
    <div class="navigation">
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</div>

<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;
        currentSlide = (index + totalSlides) % totalSlides; // Wrap around
        slides.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
    }

    function changeSlide(direction) {
        showSlide(currentSlide + direction);
    }

    // Auto slide every 5 seconds
    setInterval(() => changeSlide(1), 5000);
</script>

</body>
</html>
