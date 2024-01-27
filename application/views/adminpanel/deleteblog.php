<?php $this->load->view('adminpanel/header') ?>

<script type="text/javascript">
    <?php if ($this->session->flashdata('deleted') == 'yes') : ?>
        alert('Data Deleted Successfully');
    <?php elseif ($this->session->flashdata('deleted') == 'no') : ?>
        alert('Data Not Deleted. Try Again!');
    <?php endif; ?>

    setTimeout(function() {
        window.location.href = "<?php echo base_url('admin/blog'); ?>";
    }, 1500); // Redirect after 2 seconds (adjust the delay as needed)
</script>


<?php $this->load->view('adminpanel/footer.php') ?>