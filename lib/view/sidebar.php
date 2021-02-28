<aside class='sidebar'>
  <ul class="navbar-nav">
    <li class="nav-item"><a class="navbar-brand text-white" href="/">Twit</a></li>
    <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="/"><i class="fas fa-home"></i> ホーム</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="far fa-bell"></i> 通知</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="far fa-envelope"></i> メッセージ</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="far fa-bookmark"></i> ブックマーク</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="fas fa-feather-alt"></i></a></li>
    <li class="nav-item"><a class="nav-link text-white" href="profile.php?user_name=<?php echo $_SESSION['me']->user_name; ?>"><i class="far fa-user"></i></a></li>
    <!-- Navbar dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <?php echo $_SESSION['me']->user_name; ?>
      </a>
      <!-- Dropdown menu -->
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li class="dropdown-item">
          <form action="logout.php" method="post" id="logout">
            <input type="submit" value="ログアウト" name="submit" class="logout-btn">
            <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>">
          </form>
        </li>
      </ul>
    </li>
  </ul>
</aside>
