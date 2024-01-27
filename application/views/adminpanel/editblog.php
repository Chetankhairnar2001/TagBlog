<?php
$this->load->view('adminpanel/header');

// echo "<pre>";
// print_r($result);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Edit Blog</h2>

    <form action="<?= base_url() . 'admin/blog/editblog_post' ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" name="blog_title" placeholder="Title" value="<?= $result[0]['blog_title'] ?>">
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" name="blog_tag" placeholder="Title" value="<?= $result[0]['tag'] ?>">
        </div>
        <br>
        <select name="publish_unpublish" class="custom-select">
        <option value="1" <?= $result[0]['status'] == "1"?"selected":"" ?> >Publish</option>
            <option value="0" <?= $result[0]['status'] == "0"?"selected":"" ?>>Unpublish</option>
        </select>
        <br>
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <br>
        <div class="form-group">
            <textarea rows="8" cols="50" class="form-control" name="desc" placeholder="Blog Desc"><?= $result[0]['blog_desc'] ?></textarea>
        </div>
        <br>
        <div class="form-group" style="margin-top: 1rem;">
            <img width="150" src="<?= base_url().$result[0]['blog_img'] ?>">
            <input type="file" class="form-control mt-2" name="file" placeholder="Title" value="<?= $result[0]['blog_img'] ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Edit Blog</button>
    </form>

</main>
</div>
</div>

<script type="text/javascript">
    <?php 
      if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted']=="yes") {
          echo "alert('Data Inserted Successfully!');";
        }
        else{
          echo "alert('Not Inserted!');";
        }
      }
   ?>
</script>

<?php $this->load->view('adminpanel/footer.php') ?>
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');
</script>

