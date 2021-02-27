<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Twit</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

  <!-- original -->
  <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/src/css/style.css?<?php echo date("YmdHis"); ?>">

</head>

<body>

  <?php if(isset($_SESSION['me'])) { ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Twit</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-bell"></i> 通知</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-envelope"></i> メッセージ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-bookmark"></i> ブックマーク</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php?user_name='<?php echo $_SESSION['me']->user_name; ?>'"><i class="far fa-user"></i> プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-feather-alt"></i></a>
            </li>

            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                ユーザー
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">ユーザーページ　</a></li>
                <li class="dropdown-item">
                  <form action="logout.php" method="post" id="logout">
                    <input type="submit" value="ログアウト" name="submit" class="logout-btn">
                    <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>">
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          <!-- Left links -->

          <!-- Search form -->
          <form class="d-flex input-group w-auto">
            <input type="search" class="form-control" placeholder="キーワード検索" aria-label="Search" />
          </form>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  <?php } ?>
