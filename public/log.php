<?php
 //echo $_SERVER["REQUEST_URI"];
 //echo '<br>'. basename($_SERVER["REQUEST_URI"]);
 echo '<br>'.str_replace(basename($_SERVER["REQUEST_URI"]), '', $_SERVER["REQUEST_URI"]);
 //echo '<br>'.$_SERVER["DOCUMENT_ROOT"];
 //echo '<br>'.$_SERVER['PHP_SELF'];
 echo '<br>'.__FILE__;
 
 //$page = substr($_SERVER["REQUEST_URI"], 1);
 //echo "<br>".$page; 

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
<?php
$visit_count = 1;

if (isset($_COOKIE["visit_count"])) {
    $visit_count = $_COOKIE["visit_count"] + 1;
}

setcookie("visit_count", $visit_count, strtotime("+30 days"));

print("Количество посещений: " . $visit_count);
?>
