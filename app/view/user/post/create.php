<form method="post" action="/user/post/store" enctype="multipart/form-data" id="create-post-form">
    <div class="mb-3 input-control">
        <label for="post-title" class="form-label">Post title:</label>
        <input type="text" name="title" class="form-control form-input" id="post-title">
        <small id="error"></small>
    </div>
    <div class="mb-3 input-control">
        <label for="content" class="form-label">Post content</label>
        <textarea id="editor" class="form-control" name="content"></textarea>
    </div>
    <div class="mb-3 input-control">
        <label for="title_img" class="form-label">Title image:</label>
        <input type="file" class="form-control" name="title_img">
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
        <input type="checkbox" class="form-check-input" name="is_published"><label class="form-label">Published</label>
    </div>
    <div class="mb-3">
        <input type="reset" class="btn btn-secondary">
        <input type="submit" class="btn btn-primary" name="Create" value="Create post">
    </div>
</form>


<!-- script -->
<script src="<?=FILE?>ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector("#editor"))
        .cache(error=>{
            console.error(error)
        });
</script>