<?php include('partials/header.php'); ?>

    <div class="test_text">This is a test view loaded from /app/views/test_view.php</div>

    <p><?php echo $mytestvars['var1']; ?></p>
    <p><?php echo $badstuff; ?></p>
    <p><?php echo $mytestarray; ?></p>

<?php include('public/nav.php'); ?>
<?php include('partials/footer.php'); ?>