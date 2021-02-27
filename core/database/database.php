<?php
/**
 * PDOを使ってデータベースに接続する
 */
  try {
    $pdo = new PDO('mysql:host=db;dbname=twitter;charset=utf8mb4', 'root', 'password');
  } catch (PDOException $e) {
    echo "DB接続に失敗しました。<br />";
    echo $e->getMessage();
    exit;
  }
