<?php
   if(isset($_GET['submit'])){
      $n = $_GET['name'];
      $e = $_GET['email'];
      $g = $_GET['Gender'];
      $c = $_GET['Courses'];
      echo "<h2 Retrived DATA>";
      echo "Name :-".($n)." <br>";
      echo "Email :-".($e)."<br>";
      echo "Gender :-".($g)."<br>";
      echo "Courses :-".(implode(',', $c))."<br>";
   }
?>