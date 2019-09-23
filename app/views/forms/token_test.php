<form action="<?php echo $this->config['base_url']; ?>csrf_test_submit" method="post">

<input type="text" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

<button type="submit" name="btn_submit">Submit</button>

</form>