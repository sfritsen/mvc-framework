<?php include('partials/header.php'); ?>

<table class="table">
    <tbody>
        <?php
        foreach ($records as $row) {
            echo '<tr><td>'.$row['first_name'].'</td><td>'.$row['last_name'].'</td></tr>';
        }
        ?>
    </tbody>
</table>

<p>
<?php echo $badstuff; ?>
</p>

<?php include('partials/footer.php'); ?>