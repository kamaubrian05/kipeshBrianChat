<?php
  $name = $_GET['message1'];
   $my_file= fopen("text.txt","a") or die ("Unable to open file");
   fprintf($my_file,"$name");






?>


