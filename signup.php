<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
$app = new MyApp\Controller\Signup();
$app->run();
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/view/header.php');
?>
<div class="container">
  <div class="row pt-5">
    <div class="col-md"></div>

    <div class="col-md">
      <h2 class="mb-3 text-center">新規登録</h2>
      <div class="card">
        <div class="card-body">
          <form action="" method="post">

            <!-- User Name input -->
            <div class="form-group mb-4">
              <div class="form-outline">
                <input type="text" id="user_name" name='user_name' class="form-control"  value="<?php echo isset($app->getValues()->user_name) ? h($app->getValues()->user_name) : '';?>"/>
                <label class="form-label" for="user_name">ユーザー名</label>
              </div>
              <span class="error"><?php echo h($app->getErrors('login'));?></span>
            </div>

            <!-- Email input -->
            <div class="form-group mb-4">
              <div class="form-outline">
                <input type="email" id="email" name='email' class="form-control"  value="<?php echo isset($app->getValues()->email) ? h($app->getValues()->email) : '';?>"/>
                <label class="form-label" for="email">メールアドレス</label>
              </div>
              <span class="error"><?php echo h($app->getErrors('login'));?></span>
            </div>

            <!-- Password input -->
            <div class="form-group mb-4">
              <div class="form-outline">
                <input type="password" id="password" name='password' class="form-control" />
                <label class="form-label" for="password">パスワード</label>
              </div>
              <span class="error"><?php echo h($app->getErrors('login'));?></span>
            </div>


            <!-- token -->
            <input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">

            <!-- Submit button -->
            <input type="submit" value="サインアップ" name="submit" class="btn btn-success btn-block mb-3">
            <p class="text-center"><a href="/login.php">ログイン画面へ</a></p>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md"></div>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/view/footer.php'); ?>
