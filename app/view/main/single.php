<div class="card mb-3 post">
    <div class="card-header">
        <h5 class="card-title"><?=$post['title']?></h5>
        <span>Post rating: <?=$post['rating']?></span>
        <span class="fa-pull-right"><a href="" class="text-black" style="text-decoration: none"><i onclick="myFunction(this)" class="far fa-bookmark"></i></a> Save post</span>
    </div>
    <div class="card-body">
        <img src="../../../public/img/blog-img.jpg" class="card-img-top" alt="title img">
        <div>
            <p class="card-text"><?=$post['content']?></p>
        </div>
        <p class="card-text"><small class="text-muted">Create: <?=$post['create_date']?></small>
            <span class="fa-pull-right">
                <a href="/post/like?id=<?=$post['id']?>" style="color:black"><i class="far fa-thumbs-up" id="like">Like</i></a>
                <a href="/post/dislike?id=<?=$post['id']?>" disabled style="color:black"><i class="far fa-thumbs-down" id="dislike">Dislike</i></a>
            </span>
        </p>
    </div>
</div>

<h4>Comments for post (Total: <?=$commentCount?>):</h4>

<?php if($commentCount === 0):?>
    <p>No comments for this post... Create first!</p>
<?php else:?>
    <!-- Comments  -->
    <?php foreach($comments as $comment):?>
        <div class="card mt-3 mb-1" id="<?=$comment['id']?>">
            <div class="card-header">
                <img class="rounded-circle" width="4%" src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8b/Avatar_2_logo.jpg/220px-Avatar_2_logo.jpg" alt="user image">
                <span class="username">
                    <a href="#" class="text-black" style="text-decoration: none">Username id = <?=$comment['user_id']?></a>
                </span>
            </div>
            <div class="card-body">
                <p>
                    <?=$comment['comment']?>
                </p>
                <span><a href="#" style="text-decoration: none" class="text-black"><i class="far fa-thumbs-up mr-1"></i> Like</a> <small class="fa-pull-right">Created: <?=$comment['create_date']?></small></span>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>

<?php if(!empty($_SESSION['user'])):?>
    <!-- Comment form -->
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Create you comment:</h3>
        </div>
        <form action="/comment/create" method="post">
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Enter comment ..."></textarea>
                </div>
                <input type="hidden" name="post_id" value="<?=$post['id']?>">
            </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-secondary">Add comment</button>
        </div>
        </form>
    </div>
<?php else:?>
    <p>Sign in to leave a comment: <a href="/account/login" class="text-black">login</a></p>
<?php endif;?>

<script>
    function myFunction(x) {
        x.classList.remove('far');
        //x.classList.add('fas');
    }
</script>
