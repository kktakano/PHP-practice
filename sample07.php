<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
// print (time() + 60 * 60 * 24);・・・・60秒*60分*24時間を足す事で明日の時間を求める
// strtotime('+2day');・・・・・・・・・・・・・2日後のtimestampを得ることができる
// print (date('n/j(D)', time() + 60 * 60 * 24));
for ($i=1; $i<=365; $i++) :
  $date = strtotime('+' . $i . 'day');
  print (date('n/j(D)', $date));
  print "\n";
endfor;

// wlileも同様の囲い方有り
// while (...):
//   .....
// endwhile;
?>
</pre>
</main>
</body>    
</html>