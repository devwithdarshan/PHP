<?php
   if(isset($_POST['submit'])){
      $n = $_REQUEST['name'];
      $e = $_REQUEST['email'];
      $g = $_REQUEST['Gender'];
      $c = $_REQUEST['Courses'];
      echo "<h2 Retrived DATA>";
      echo "Name :-".($n)." <br>";
      echo "Email :-".($e)."<br>";
   }
?>