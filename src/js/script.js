$(function () {
  $('#delete_btn').on('click', function () {
    return confirm("削除してもよろしいですか？");
  });

  $('#drawer').on('click', function () {
    if ($('body').hasClass('close')) {
      $('body').removeClass('close');
    } else {
      $('body').addClass('close');
    }
  });

  function todoCountBar() {
    let allCount  = Number($('#todo_count').val());
    let doneCount = Number($('#done_count').val());
    let progress = ((doneCount / (allCount + doneCount)) * 100) + '%';
    $('.js-done-bar').css('width', progress);
  }
  todoCountBar();
});

'use strict'
// チェックボックスの取得
const btn = document.querySelector("#btn-mode");
// チェックした時の挙動
btn.addEventListener("change", () => {
  if (btn.checked == true) {
    // ダークモード
    document.body.classList.remove("light-theme");
    document.body.classList.add("dark-theme");
  } else {
    // ライトモード
    document.body.classList.remove("dark-theme");
    document.body.classList.add("light-theme");
  }
});
