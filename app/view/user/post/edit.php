<form method="post" action="/user/post/update" enctype="multipart/form-data" id="update-post-form">
    <input type="hidden" name="id" value="<?=$post['id']?>">
    <div class="mb-3 input-control">
        <label for="post-title" class="form-label">Post title:</label>
        <input type="text" name="title" class="form-control form-input" id="post-title" value="<?=$post['title']?>">
        <small id="error"></small>
    </div>
    <div class="mb-3 input-control">
        <label for="content" class="form-label">Post content</label>
        <textarea id="editor" class="form-control" name="content"><?=$post['content']?></textarea>
    </div>
    <div class="mb-3 input-control">
        <label for="title_img" class="form-label">Title image:</label>
        <input type="file" class="form-control" name="title_img" value="<?=$post['title_img']?>">
    </div>
    <div class="mb-3 input-control">
        <label for="category" class="form-label">Post category:</label>
        <select class="form-select" id="category" name="category_id">
            <option value="1" selected>One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3 input-control">
        <?php if($post['is_published']=='yes'):?>
            <input type="checkbox" class="form-check-input" name="is_published" checked>
        <?php else:?>
            <input type="checkbox" class="form-check-input" name="is_published">
        <?php endif?>
            <label class="form-label">Published</label>
    </div>
    <div class="mb-3">
        <input type="reset" class="btn btn-secondary">
        <input type="submit" class="btn btn-primary" name="update" value="Update post">
    </div>
</form>

<!-- CKEDITOR 5 -->
<script src="<?=FILE?>ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector("#editor"))
        .cache(error=>{
            console.error(error)
        });
</script>