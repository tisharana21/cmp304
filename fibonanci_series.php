<?php
   
   $a=0;
   $b=1;
   echo $a."  ".$b;
   for($i=0;$i<=7;$i++)
   {
      $c=$a+$b;
      echo "  ".$c."  ";
      $a=$b;
      $b=$c;
   }

?>