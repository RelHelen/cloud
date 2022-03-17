<?php
if(!isset($_COOKIE['user'])):
//if($_COOKIE['user']==''):
?>

<?php 
    else:
?>
<p>Привет, <?=$_COOKIE['user']?> <a href="connect/exit.php">Выйти</a></p>
 
<?php 
    endif;
?>

