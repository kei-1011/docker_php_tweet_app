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



$(function(){

  //カウント用の関数を定義
  function getLen(str){
    let result = 0;
    for(var i=0;i<str.length;i++){
      let chr = str.charCodeAt(i);
      if((chr >= 0x00 && chr < 0x81) ||
         (chr === 0xf8f0) ||
         (chr >= 0xff61 && chr < 0xffa0) ||
         (chr >= 0xf8f1 && chr < 0xf8f4)){
        //半角文字の場合は1を加算
        result += 1;
      }else{
        //それ以外の文字の場合は2を加算
        result += 2;
      }
    }
    //結果を返す
    return result;
  };

  //入力時のイベント
    $('.tweet-form .text').on('input', function(){
      let cnt = getLen($(this).val())   //文字数を取得
      let cnt_bar = cnt * 0.1999;     //文字数を元に計算
      let dash_array = 56.5 + cnt_bar;  // グラフに反映する計算式
      let circle = $('#circle');
      let submit_btn = $('.tweet-form .submit_btn');

      // stroke-dasharrayにdash_arrayの数値を反映
      circle.css('stroke-dasharray',dash_array);
      $('.now_cnt').text(cnt);//現在の文字数を表示

      if(cnt == 0){                       //0文字
        submit_btn.prop('disabled', true);  // ボタン無効
        $('.circle_wrap').hide();           // circleを隠す

      } else if(cnt > 0 && 280 > cnt){            // 1文字以上、280文字以内
        $('.circle_wrap').fadeIn();               // circleを表示
        submit_btn.prop('disabled', false);       // ボタン有効化
        $('.cnt_area').removeClass('cnt_danger'); // 文字色を戻す
        circle.attr('stroke','#1DA1F2');          // errorから復帰した時、circleの色を青に戻す

      } else {                                  // 280文字を超える場合
        circle.attr('stroke','red');            // circleを赤色
        $('.cnt_area').addClass('cnt_danger');  // 文字色を赤色
        submit_btn.prop('disabled', true);      // ボタン無効
      }
    });

    // triggerメソッドで、とりあえずinputイベントを手動で発生させる。
    // リロード時に初期文字列が入っていた時の対策　＋　circleを非表示にしたい
    $('.tweet-form .text').trigger('input');

});
