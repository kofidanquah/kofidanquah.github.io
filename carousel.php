<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div id="demo" class="carousel slide col-sm-4" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner container-fluid">
            <div class="carousel-item active">
                <img src="images/img_5terre_wide.jpg" class="d-block img-fluid" width="100%" height="200px">
            </div>
            <div class="carousel-item">
                <img src="images/img_5terre_wide.jpg" class="d-block img-fluid" width="100%" height="200px">
            </div>
            <div class="carousel-item">
                <img src="images/img_5terre_wide.jpg" class="d-block img-fluid" width="100%" height="200px">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
    </div>

</body>

</html>