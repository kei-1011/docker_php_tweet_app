<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
$app = new MyApp\Controller\Index();
$app->run();

require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/header.php');
?>

  <div class="container" id='index'>
    <div class="row">

      <div class="col-md-2 sidebar-wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/sidebar.php'); ?>
      </div>

      <div class="col-md-8 main-wrapper p-0">

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/tweet.php'); ?>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/timeline.php'); ?>
      </div>

    </div>
  </div><!--container-->

<input type="hidden" name="token" id="token" value="<?php echo h($_SESSION['token']);?>">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/footer.php');?>
