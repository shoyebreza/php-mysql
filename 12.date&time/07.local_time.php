
<?php
setlocale(LC_TIME, "C");
echo strftime("%A");
setlocale(LC_TIME, "fi_FI");
echo strftime(" in Finnish is %A,");
setlocale(LC_TIME, "fr_FR");
echo strftime(" in French %A and");
setlocale(LC_TIME, "de_DE");
echo strftime(" in German %A.\n");
?>
