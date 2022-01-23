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
                <!-- new login -->
                <!-- перенести в контролеер! -->
                <?php if(empty($_SESSION['user'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/login">Login</a>
                    </li>
                <?php else:?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php if(\app\model\UserModel::isAdmin()):?>
                                <li><a class="dropdown-item" href="/admin">Admin dashboard</a></li>
                            <?php else:?>
                                <li><a class="dropdown-item" href="/user">User dashboard</a></li>
                            <?php endif?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/account/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php endif?>
                <?php if(empty($_SESSION['user'])):?>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/registration">Registration</a>
                    </li>
                <?php endif?>
                <!-- end -->
            </ul>
        </div>
    </div>
</nav>