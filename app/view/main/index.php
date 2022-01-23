<?php if(!empty($posts)):?>
    <!-- post -->
    <?php foreach($posts as $post):?>
        <div class="card mb-3 post">
            <div class="card-header">
                <h5 class="card-title"><?=$post['title']?></h5>
                <span>Post rating: <?=$post['rating']?></span>
                <span class="fa-pull-right"><a href="" class="text-black" style="text-decoration: none"><i id="save-post" class="far fa-bookmark"></i></a> Save post</span>
            </div>
            <div class="card-body">
                <img src="../../../public/img/blog-img.jpg" class="card-img-top" alt="title img">
                <p class="card-text"><?=substr($post['content'], 0, 600)?></p>
                <p>
                    <span><a href="/main/single?id=<?=$post['id']?>">Show more</a></span>
                </p>
                <p class="card-text"><small class="text-muted">Create: <?=$post['create_date']?></small>
                    <span class="fa-pull-right">
                        <a href="/post/like?id=<?=$post['id']?>" style="color:black"><i id="like" class="far fa-thumbs-up">Like</i></a>
                        <a href="/post/dislike?id=<?=$post['id']?>" style="color:black"><i id="dislike" class="far fa-thumbs-down">Dislike</i></a>
                    </span>
                </p>
            </div>
        </div>
    <?php endforeach;?>
    <!-- pagination -->
    <?php if($pageno->totalPages > 1):?>
        <?=$pageno;?>
    <?php endif?>
<?php endif;?>