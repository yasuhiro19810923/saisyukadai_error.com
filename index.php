<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>error.com</title>

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- ストップウォッチ部分 -->
<div class="container">
  <h1>プレゼンタイム</h1>

    <h2 id="timer">00:00:00</h2>
  <button id="start_stop" class="btn btn-lg btn-primary">START</button>
</div>
<!--タイトル部分-->

<div class="title">
  <div class="main_title">
    <h1>error.com</h1>
  </div>
  <div class="sub_title">
    <h1>United by Error</h1> 
  </div>
</div>

<div class="kensakutouroku">

  <!-- ログイン部分 -->
  <div class="touroku">
    <p class="setumei">Errorの解決は<span>Error.com</span>にお任せを。</P>
    <p class="setumei2">Errorをみんなで共有してErrorで悩まないプログラミングの世界を。<br><span>United by Error</span> エラーで一つになろう</p>
    <div class="tourokubutton">
      <button class="usertouroku" >新規ユーザー登録</button>
      <button class="userlogin" >ログイン</button>
      <!-- <form action="">
      <p>ユーザー名<input type="text"></p>
      <p>メールアドレス<input type="email"></p>
      <p>パスワード<input type="password"></p>
      </form>
      </div> -->
    </div>
  </div>

<!-- 検索部分 -->

  <!-- <div class="kensaku"> -->
  <form method="post" action="select.php" target="_blank">
    <div class="jumbotron">
      <fieldset>
        <legend>検索</legend>
          <label><textArea name="kensaku" rows="4" cols="40"></textArea></label><br>
          <input type="submit" value="送信">
      </fieldset>
     </div>
  </form>
    <!-- <p class="kensakugamen"><br><button class="kensakubutton">検索<br></button><textarea cols="50" rows="10" name="kensaku"></textarea></p>
  </div> -->

</div>

<!-- 言語部分 -->
<div class="gengotitle">
  <h1>言語から検索</h1>
</div>
<div class="gengo">
 
  <div class="htmlarea">
    <div class="html">
    <a href="http://localhost/error2.com/htmlkaiketu.php" target="_blank" ><img src="img/html.png"></a>
    </div>
    <p class="htmlsetumei">HTMLの情報<br>htmlのエラー解決など豊富な情報がここに</p>
  </div>

  <div class="cssarea">
    <div class="css">
      <img src="img/css.png">
    </div>
    <p class="csssetumei">CSSの情報<br>CSSのエラー解決など豊富な情報がここに</p>
  </div>

  <div class="javascriptarea">
    <div class="javascript">
    <a href="http://localhost/error2.com/jskaiketsu.php" target="_blank" ><img src="img/js.jpeg"></a>
    </div>
    <p class="javascriptsetumei">JavaScriptの情報<br>htmlのエラー解決など豊富な情報がここに</p>
  </div>

  <div class="phparea">
    <div class="php">
      <img src="img/php.jpeg">
    </div>
    <p class="phpsetumei">phpの情報<br>phpのエラー解決など豊富な情報がここに</p>
  </div>




</div>





<!-- 先生部分 -->

<div class="sensei">

</div>

<!-- 記事部分 -->

<div class="kiji">



</div>

 <!-- jS -->

<script>

  var start;
  var timer_id;

  document.getElementById('start_stop').addEventListener('click', function(){
    
    if(this.innerHTML === 'START'){

      start = new Date();

      timer_id = setInterval(gotimer,10);

      //STOPボタンにする

      this.innerHTML = 'STOP';
  } else {

      //タイマーを止める
      clearInterval(timer_id);

      //STARTボタンの戻す
      this.innerHTML = 'START';
  }
  });

  var addZero = function(value){
      if(value<10){
        value = '0' + value;
      }
      return value;
  }
   
  var gotimer = function(){
      var now = new Date();

      var milli = now.getTime() - start.getTime();
      var seconds = Math.floor(milli/1000);
      var minutes = Math.floor(seconds/60);
      var hours = Math.floor(minutes/60);

      seconds = seconds - minutes * 60;
      miunetes = minutes - hours * 60;

      hours = addZero(hours);
      minutes = addZero(minutes);
      seconds = addZero(seconds);

      document.getElementById('timer').innerHTML = hours + ':' + minutes + ':' + seconds;

  }


</script>
</body>
</html>