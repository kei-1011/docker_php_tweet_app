<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
$app = new MyApp\Controller\Index();
$app->run();

require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/header.php');

?>
<main class="top">
  <div id="container" class="container">
<h1>top</h1>
  </div><!--container-->
</main>
<input type="hidden" name="token" id="token" value="<?php echo h($_SESSION['token']);?>">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/footer.php');?>
