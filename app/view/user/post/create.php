<article>
    <div class="heading">
        <h2>Create post</h2>
    </div>
    <div class="content">
        <form method="post" action="/user/post/store" enctype="multipart/form-data" id="create-post-form">
            <div class='form-control'>
                <label>Title</label>
                <input type="text" class="form-input" name="title" id="title">
            </div>
            <div  class='form-control'>
                <label class="form-label">Content</label>
                <textarea name="content" class="form-input" id="editor"></textarea>
            </div>

            <div  class='form-control'>
                <label class="form-label">Title image: </label>
                <input type="file" accept="image/jpeg,image/png,image/gif" name="title_img">
            </div>
            <div  class='form-control'>
                <label class="form-label">Category</label>
                <select id="category" name="category_id">
                    <?php foreach($categories as $category):?>
                        <option value="<?=$category['id']?>" selected><?=$category['title']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div  class='form-control'>
                <fieldset class="tag-field">
                    <legend>Post tags:</legend>
                    <?php foreach($tags as $tag):?>
                        <label class="form-label tag" title="<?=$tag['description']?>"><input  type="checkbox" name="tag[]" value="<?=$tag['id']?>"> <?=$tag['title']?></label>
                    <?php endforeach;?>
                </fieldset>
            </div>
            <div  class='form-control'>
                <input type="checkbox" name="is_published"><label class="form-label"> Published</label>
            </div>
            <div  class='form-control'>
                <button type="reset" class="btn">Reset</button>
                <button type="submit" class="btn">Create</button>
            </div>
        </form>
    </div>
</article>

<!-- tt -->
<script src="https://cdn.tiny.cloud/1/0fvm7vib6z76x9zpuzgorgy61228fhrs30cv374tp9fula0p/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#editor',
        height: 500,
        plugins: 'image code',
        toolbar: 'undo redo | image code',

        // without images_upload_url set, Upload tab won't show up
        images_upload_url: 'file/upload/',  // php url files/uploaded/

        // override default upload handler to simulate successful upload
        images_upload_handler: function (blobInfo, success, failure) {
            let xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'file/upload/');  // php url /public/files/img/posts/posts_img/

            xhr.onload = function() {
                let json;

                if (xhr.status !== 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        },
    });
</script>
