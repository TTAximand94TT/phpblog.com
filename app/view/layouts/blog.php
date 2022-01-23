<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../../public/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <!-- Title -->
    <title>Blog</title>
</head>
<body>
<!-- Header -->
<?php require('includes/header.php') ?>
<!-- end header -->
<!-- main -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <!-- Main content -->
            <?=$content?>
            <!-- end main content -->
        </div>
        <div class="col-md-2">
            <!-- Navbar menu -->
            <div class="nav-menu">
                <span>Category:</span>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category one</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category two</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category thee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category four</a>
                    </li>
                </ul>
            </div>
            <!-- end navbar -->
        </div>
    </div>
</div>
<!-- end main -->
<!-- footer -->
<?php require('includes/footer.php') ?>
<!-- end footer -->
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

