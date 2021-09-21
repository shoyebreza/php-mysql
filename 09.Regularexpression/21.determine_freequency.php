<?php
      $buzword = array("dolor","amet","veniam","quibusdam");

      $talk =" <<< talk 
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia culpa amet provident optio ea veniam beatae natus et quaerat aliquid esse minus maxime nostrum, quibusdam qui quidem consequatur, vero eum suscipit repellendus iste quod. Itaque unde voluptate quibusdam officiis minima.";

      foreach($buzword as $bz){
          echo "the word $bz apears " .substr_count($talk,$bz)."time(s).</br>";
      }

      




?>