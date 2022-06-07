<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP MQTT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-light">
        <div class="container col-md-3">
            <span class="navbar-brand mb-0 h1">PHP MQTT</span>
        </div>
    </nav>

    <div class="container col-md-3 mt-5">
        <div class="d-grid gap-3">
            <a href="publish.php?topic=phpid/8001253121/lampu&pesan=1" type="button" class="btn btn-success btn-lg">Lampu ON</a>
            <a href="publish.php?topic=phpid/8001253121/lampu&pesan=0" type="button" class="btn btn-danger btn-lg">Lampu OFF</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>