 <?php include "model/database.php"; ?>

 <?php
  //Get the total questions
  $query = "select * from questions";
  //Get Results
  $results = $mysqli->query($query) or die($mysqli->error . __LINE__);
  $total = $results->num_rows;

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
         <h2>Test your Mathematics Knowledge</h2>
         <p>This is a multiple choice quize to test your knowledge about something</p>
         <ul>
           <li><strong>Number of Questions: </strong><?php echo $total / 2; ?>
         </ul>
         <li><strong>Type: </strong>Multiple Choice</ul>
         <li><strong>Estimatd Time: </strong><?php echo $total * 0.5; ?> minutes</ul>
           </ul>

           <button class="btn btn-primary" name="grade1" onclick="window.location.href='view/question.php?n=1'">Grade 1</button>
           <button class="btn btn-primary" name="grade2" onclick="window.location.href='view/question2.php?n=11'">Grade 2</button>
       </div>
   </div>
   </main>


   <footer>
   </footer>
 </body>

 </html>