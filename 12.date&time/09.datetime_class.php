
<?php
  $now   = new DateTime;
  $clone = $now;        //this doesnot clone so:
  $clone->modify( '-1 day' );

  echo $now->format( 'd-m-Y' ), "\n", $clone->format( 'd-m-Y' );
  echo '----', "\n";

  // will print same.. if you want to clone make like this:
  $now   = new DateTime;
  $clone = clone $now;   
  $clone->modify( '-1 day' );
   
  echo $now->format( 'd-m-Y' ), "\n", $clone->format( 'd-m-Y' );
?>