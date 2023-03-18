<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="shortcut icon" href="src/image/icon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap" rel="stylesheet">
</head>

<body>
  <style>
    #topimg {
      font-family: 'Rubik Iso', cursive;
    }
  </style>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand mx-auto m-2 fw-bold" id="topimg" href="index.php">
        Rock Paper Scissors
      </a>
    </div>
  </nav>
  <form action="index.php" method="post">
    <?php
    $COMSCORE = 0;
    $MYSCORE = 0;
    ?>
    <div class="container d-flex justify-content-between my-1">
      <span class="text-start my-0">Computer Score: <?PHP echo $COMSCORE; ?></span>
      <span class="text-end my-0">Your Score: <?php echo $MYSCORE; ?></span>
    </div>
    <?php
    $oparr = array("oprock", "oppaper", "opscissors");
    $generate_hand = array_rand($oparr, 1);
    ?>
    <div class="container d-flex flex-column my-5">
      <div class="top mx-auto">
        <div class="name1 text-center d-flex flex-column">
          <span class="text-bg-danger fw-bold py-1 h4 rounded rounded-2">Player 1</span>
          <?php if($_SERVER['REQUEST_METHOD']=='POST'){
            echo '<img src="src/image/<?php echo $oparr[$generate_hand]; ?>.png" alt="rock" class="mx-auto">';
          }
          else{
            echo '<img src="src/image/<?php echo "hello"; ?>.png" alt="rock" class="mx-auto">';
          }
          ?>
        </div>
      </div>
      <?php
      $rock = false;
      $paper = false;
      $scissors = false;
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['rock'])) {
          $rock = true;
        }
        if (isset($_POST['paper'])) {
          $paper = true;
        }
        if (isset($_POST['scissors'])) {
          $scissors = true;
        }
      }
      else{
        echo '<div class="bottom mx-auto my-4">
        <div class="name2 text-center d-flex flex-column">
          <span class="text-bg-primary fw-bold py-1 h4 rounded rounded-2">Player 2</span>
          <img src="src/image/rock.png" alt="rock" class="mx-auto">
        </div>';
      }
      ?>
    <?php
    if($rock){
      echo '<div class="bottom mx-auto my-4">
        <div class="name2 text-center d-flex flex-column">
          <span class="text-bg-primary fw-bold py-1 h4 rounded rounded-2">Player 2</span>
          <img src="src/image/rock.png" alt="rock" class="mx-auto">
        </div>'; }
      if($paper){
        echo '<div class="bottom mx-auto my-4">
        <div class="name2 text-center d-flex flex-column">
          <span class="text-bg-primary fw-bold py-1 h4 rounded rounded-2">Player 2</span>
          <img src="src/image/paper.png" alt="rock" class="mx-auto">
        </div>';
      }
      if($scissors){
        echo '<div class="bottom mx-auto my-4">
        <div class="name2 text-center d-flex flex-column">
          <span class="text-bg-primary fw-bold py-1 h4 rounded rounded-2">Player 2</span>
          <img src="src/image/scissors.png" alt="rock" class="mx-auto">
        </div>';
      }
    ?>
      </div>
    </div>
    <div class="buttons text-center container">
      <p class="text-center mx-auto h4 py-1 text-bg-secondary w-75">Your HandPad</p>
      <div class="btn-group my-2" role="group" aria-label="Basic mixed styles example">
        <button type="submit" name="rock" value="1" class="btn btn-warning"><img src="src/image/rock.png" alt="" style="height: 2cm; width: 2cm;"></button>
        <button type="submit" name="paper" value="2" class="btn btn-success"><img src="src/image/paper.png" alt="" style="height: 2cm; width: 2cm;"></button>
        <button type="submit" name="scissors" value="3" class="btn btn-info"><img src="src/image/scissors.png" alt="" style="height: 2cm; width: 2cm;"></button>
      </div>
    </div>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>