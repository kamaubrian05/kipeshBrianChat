<?php

    $myfile = fopen("message.txt","w") or die ("Unable to open file!!");
     //echo fread($myfile,filesize("message.txt"));
     fprintf($myfile,"This is it");
    fclose($myfile);


?>

/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/11/16
 * Time: 4:51 PM
 */