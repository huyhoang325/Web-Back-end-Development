 <?php include "../model/database.php"; ?>
 <?php session_start(); ?>
 <?php
  //Create Select Query
  $query = "select * from shouts order by time desc limit 100";
  $shouts = $mysqli->query($query);

  ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8" />
   <title>Mathematic Quizzer!</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 </head>

 <body>
   <div id="container">
     <header>
       <div class="container">
         <h1>Mathematic Quizzer!</h1>
       </div>
     </header>


     <main>
       <div class="container">
         <h2>You are Done!</h2>
         <p>Congrats! You have completed the test</p>
         <p>Final socre: <?php echo $_SESSION['score']; ?></p>
         <a href="../index.php" class="start">Take Test Again</a>
         <?php session_destroy(); ?>
       </div>
     </main>


     <footer>
     </footer>
 </body>

 </html>