<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
$app = new MyApp\Controller\Profile();
$user = $app->run($_GET['user_name']);


require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/header.php');
// 登録したタスクをリスト表示させる
?>
  <div class="container" id='profile'>
    <div class="row">

      <div class="col-md-2 sidebar-wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/sidebar.php'); ?>
      </div>

      <div class="col-md-7 main-wrapper p-0">

      <div class="profile-wrapper">
        <?php echo $user->getValues()->user[0]->screen_name; ?>
        <?php echo $user->getValues()->user[0]->user_name; ?>
      </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/timeline.php'); ?>
      </div>

    </div>
  </div><!--container-->
<input type="hidden" name="token" id="token" value="<?php echo h($_SESSION['token']);?>">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/footer.php');?>
