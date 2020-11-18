<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Een interactieve website gericht op het werk van Folkert de Jong.">
    <meta name="author" content="Justin Rodriguez Montoya, Mike Yang">

    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Kunstspeeltuin</title>
</head>
<body>
    <div id="bg__vanta"></div>

    <div class="container-fluid">
        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3 page__title">The real deal</span>
            <br>
            <span class="site-heading-lower page__title font-weight-bold">Kunstspeeltuin</span>
        </h1>
    </div>

    <button class="Testbutton">TestButton</button>

    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
    <script>
        VANTA.FOG({
            el: "#bg__vanta",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            highlightColor: 0x5700ff,
            midtoneColor: 0x6bff00,
            lowlightColor: 0x0,
            baseColor: 0x0,
            blurFactor: 0.24,
            speed: 0.10,
            zoom: 0.90
        })
    </script>
</body>
</html>