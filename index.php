<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
$app = new MyApp\Controller\Index();
$app->run();

require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/header.php');
// 登録したタスクをリスト表示させる

?>
<main class="top">
  <div id="container" class="container">
    <h1>top page</h1>

    <input id="btn-mode" type="checkbox"> ダークモード


    <form action="logout.php" method="post" id="logout">
      <input type="submit" value="ログアウト" name="submit" class="logout-btn">
      <input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
    </form>
  </div><!--container-->
</main>
<input type="hidden" name="token" id="token" value="<?php echo h($_SESSION['token']);?>">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/view/footer.php');?>
