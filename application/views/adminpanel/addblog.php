<?php $this->load->view('adminpanel/header') ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add Blog</h2>

    <form action="<?= base_url() . 'admin/blog/addblog_post' ?>" method="post" enctype="multipart/form-data">
        <div class="form-group my-2">
            <input type="text" class="form-control" name="blog_title" placeholder="Title">
        </div>

        <div class="form-group my-2">
            <input type="text" class="form-control" name="blog_tag" placeholder="Tag">
        </div>

        <div class="form-group my-2">
            <textarea class="form-control" name="desc" placeholder="Blog Desc"></textarea>
        </div>

        <div class="form-group my-2">
            <input type="file" class="form-control" name="file" placeholder="Title">
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Add Blog</button>
    </form>

</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer.php') ?>

<script type="text/javascript">
    <?php
    if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted'] == "yes") {
            echo "alert('Data Inserted Successfully')";
        }
        else{
            echo "alert('Data Not Inserted!')";
        }
    }

    ?>
</script>

<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');
</script>