<?php
   if(isset($_POST['submit'])){
      $n = $_POST['name'];
      $e = $_POST['email'];
      $g = $_POST['Gender'];
      $c = $_POST['Courses'];
      echo "<h2 Retrived DATA>";
      echo "Name :-".($n)." <br>";
      echo "Email :-".($e)."<br>";
   }
?>