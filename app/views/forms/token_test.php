<form action="<?php echo base_url('csrf_test_submit'); ?>" method="post">

    <?php echo $_SESSION['csrf_token']; ?>
    <button type="submit" name="btn_submit">Submit</button>
    <?php echo csrf_input(); ?>

</form>
<?php include('public/nav.php'); ?>