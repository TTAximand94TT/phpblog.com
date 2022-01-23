    <div class="row">
            <div class="col-md-3">
                <img class="img" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/Avatar_2_logo.jpg/220px-Avatar_2_logo.jpg" alt="avatar">
                <div class="mt-3">
                    <a class="btn btn-primary" href="/account/edit">Edit profile</a>
                </div>

            </div>
            <div class="col-md-9">
                <h5>Приветствую вас <?=$user['name']?>!</h5>
                <span>Ваш email: <b><?=$user['email']?></b></span><br>
                <span>Дата регистрации: <b><?=$user['register_date']?></b></span><br>
                <span>Количество созданных постов: <b><?=$postsCount?></b></span>
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
                <a class="btn btn-secondary" href="/user/post/create" id="user-create-post">Create post</a>
            </p>
            <div class="collapse" id="user-posts">
                <div class="card card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th>Rating</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th>Create date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($userPosts as $post):?>
                        <tr>
                            <td><?=$post['title']?></td>
                            <td><?=$post['rating']?></td>
                            <td><?=$post['category_id']?></td>
                            <td><?=$post['create_date']?></td>
                            <td>
                                <a class="btn btn-primary" href="">Published</a>
                                <a class="btn btn-secondary" href="/user/post/edit/?id=<?=$post['id']?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger" href="/user/post/delete/?id=<?=$post['id']?>"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-primary" href="/main/single/?id=<?=$post['id']?>"><i class="fas fa-book-open"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- -->
        </div>
        <!-- //////////////////////////////////////////// Comments /////////////////////////////////////////////////////////// -->
        <div class="row mt-4 mb-5">
            <h3>Comments</h3>
            <!-- comments -->
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#user-comments" aria-expanded="false" aria-controls="user-comments">
                    Show you comments
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
                                <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2 post</td>
                            <td>comment text</td>
                            <td>20:26 24.12.2021</td>
                            <td>
                                <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td >3 post</td>
                            <td>comment text</td>
                            <td>20:26 24.12.2021</td>
                            <td>
                                <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- //////////////////////////////////////////// Save posts /////////////////////////////////////////////////////////// -->
        <div class="row mt-4 mb-5">
        <h3>Save posts</h3>
        <!-- comments -->
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#save-posts" aria-expanded="false" aria-controls="save-posts">
                Show posts
            </button>
        </p>
        <div class="collapse" id="save-posts">
            <div class="card card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Post</th>
                        <th scope="col">Text</th>
                        <th scope="col">Create date</th>
                        <th scope="col">Show posts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>1 post</td>
                        <td>comment text</td>
                        <td>20:26 24.12.2021</td>
                        <td>
                            <a class="btn btn-primary" href=""><i class="fas fa-book-open"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end main content -->