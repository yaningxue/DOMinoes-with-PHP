<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOMinoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <h1>Yaning Xue's Dominoes</h1>
    <?php
    $dominoes = [
      '<div class="dots"></div>',
      '<div class="dots one">
        <div class="dot"></div>
      </div>',
      '<div class="dots two">
        <div class="dot"></div>
        <div class="dot"></div>
      </div>',
      '<div class="dots three">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>',
      '<div class="dots four">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>',
      '<div class="dots five">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>',
      '<div class="dots six">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>'
    ];
    ?>
    <div class="dominoes">
    <?php for ($i=1; $i<=100; $i++) : ?>
          <?php
            $num1 = rand(0,6);
            $num2 = rand(0,6);
            echo '<div class="domino">' .$dominoes[$num1] .$dominoes[$num2] .'</div>';
          ?>
    <?php endfor ; ?>
  </div>
</body>
</html>
