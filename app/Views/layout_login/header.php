<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->

    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" type="image/png" href="/logo4.ico"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/8e23d86a11.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style_login.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-info fixed-top" style="background: linear-gradient(0deg, #16213e -0.29%, #16213e 100%);">
      <img src="/img/logo3.png" width="150px">
    </nav>

    <br><br><br>

    <?= $this->renderSection('content'); ?>

</body>
</html>