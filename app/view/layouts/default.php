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
    <link href="/public/css/comment.css" rel="stylesheet">
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
            <!-- Category navbar menu -->
            <aside class="nav-menu">
                <span>Category:</span>
                <ul class='nav flex-column'>
                    <?php new \app\lib\Menu();?>
                </ul>
            </aside>
            <!-- end category navbar -->
        </div>
    </div>
</div>
<!-- end main -->
<!-- footer -->
<?php require('includes/footer.php') ?>
<!-- end footer -->
<!-- Validation script -->
<script src="/public/js/validation/register-validation.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php foreach($scripts as $script){
    echo $script;
}?>

</body>
</html>
