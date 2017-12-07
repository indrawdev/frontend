<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->template->title->default("Default title"); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $this->template->description; ?>">
    <meta name="author" content="LABFUTSAL">
    <?php echo $this->template->meta; ?>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <?php echo $this->template->stylesheet; ?>
</head>
<body>

<?php 
    // This is an example to show that you can load stuff from inside the template file
    echo $this->template->widget("navigation", array('title' => 'LABFUTSAL'));
?>

<div class="container" style="margin-top: 60px;">
  <?php
    // This is the main content partial
    echo $this->template->content;
  ?>
</div>
<footer class="footer">
  <div class="container">
    <span class="text-muted">
      <?php 
        // Show the footer partial, and prepend copyright message
        echo $this->template->footer->prepend("&copy; LABFUTSAL 2017 - ");
      ?>    
    </span>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php echo $this->template->javascript; ?>

</body>
</html>