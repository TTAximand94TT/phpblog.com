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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">MVCBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/main/index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/main/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/main/contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header -->

<div class="container mt-4 content">
<!-- main -->
    <div class="row">
        <div class="col-md-10">

            <div class="row">
                <div class="col-md-3">
                    <img class="img" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/Avatar_2_logo.jpg/220px-Avatar_2_logo.jpg" alt="avatar">
                    <div class="mt-3">
                        <button class="btn btn-primary">Edit profile</button>
                    </div>

                </div>
                <div class="col-md-9">
                    <h5>Приветствую вас юзер!</h5>
                    <span>Ваш email:<b>34e23wrsda@mail.com</b></span><br>
                    <span>Ваш email:<b>34e23wrsda@mail.com</b></span>
                </div>
            </div>
<!-- //////////////////////////////////////////////////// Posts ////////////////////////////////////////////////////// -->
            <div class="row mt-4">
                <h3>Posts</h3>
                <!-- posts -->
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#user-posts" aria-expanded="false" aria-controls="user-posts">
                        Show you posts
                    </button>
                </p>
                <div class="collapse" id="user-posts">
                    <div class="card card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Edit</th>
                                <th>Create date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Post title/td>
                                <td>Post content</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-primary">Published</button>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-primary">Published</button>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >Larry the Bird</td>
                                <td>@twitter</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-primary">Published</button>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- -->
            </div>
<!-- //////////////////////////////////////////// Comments /////////////////////////////////////////////////////////// -->
            <div class="row mt-4 mb-5">
                <h3>Comments</h3>
                <!-- posts -->
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#user-comments" aria-expanded="false" aria-controls="user-comments">
                        Show you posts
                    </button>
                </p>
                <div class="collapse" id="user-comments">
                    <div class="card card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Post</th>
                                <th scope="col">Text</th>
                                <th scope="col">Create date</th>
                                <th scope="col">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1 post</td>
                                <td>comment text</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>2 post</td>
                                <td>comment text</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td >3 post</td>
                                <td>comment text</td>
                                <td>20:26 24.12.2021</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- -->
            </div>

        </div>
        <!-- end main content -->

<!-- ///////////////////////////////////// navbar ////////////////////////////////////////////////// -->
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

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>MVCBlog
                    </h6>
                    <p>
                        Blog on mvc framework.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Social
                    </h6>
                    <p>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </p>
                    <p>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-github"></i>
                        </a>
                    </p>
                    <p>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                    </p>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> Planet Earth, Street 10012</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        mvcblog@mail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="/">mvc.framework.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- footer -->
<!--
<footer class="bg-dark text-white pt-4 pb-3">
    <div class="container-fluid text-center">
        <div class="row">
            <form method="post" action="" id="feedback-form">
                <div>
                    <h5>Feedback form</h5>
                </div>
                <div class="mb-1">
                    <input type="email" class="form-control" id="email" placeholder="your@mail.com">
                </div>
                <div class="mb-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-1">
                    <input type="submit" class="form-control"  value="Send">
                </div>
            </form>
        </div>
        <div class="row mt-2">
                <div class="">My Blog on MVC Framework @2021</div>
        </div>
        </div>
    </div>
</footer> -->
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
