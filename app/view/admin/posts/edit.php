<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- PAGE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit post
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- FORM -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?=$post['title']?>" placeholder="Enter post title">
                            </div>
                            <div class="form-group">
                                <label for="editor">Content</label>
                                <textarea id="editor" name="content">
                                    <?=$post['content']?>
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Title image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="title-img">
                                        <label class="custom-file-label" for="title-img">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label">Select category:</label>
                                <div class="input-group">
                                    <select class="form-select" id="category" name="category_id">
                                        <option value="1" selected>One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-check">
                                <?php if($post['is_published']=='yes'):?>
                                    <input type="checkbox" checked class="form-check-input" name="is_published" id="is_published">
                                <?php else:?>
                                    <input type="checkbox" class="form-check-input" name="is_published" id="is_published">
                                <?php endif;?>
                                    <label class="form-check-label" for="is_published">Published</label>
                            </div>
                            <input type="hidden" name="id" value="<?=$post['id']?>">
                    </div>

                    <div class="card-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Edit post</button>
                        </form>
                        <!-- END FORM -->
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
  </div>
</section>
<!-- ckeditor -->
<script src="<?=FILE?>ckeditor5/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector("#editor"))
        .cache(error=>{
            console.error(error)
        });
</script>