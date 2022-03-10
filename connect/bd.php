<?php	
    //include 'constants.php';
    //Connect To Database 
    function connect(
    $DB_SERVER="localhost";
    $DB_USER="root";
    $DB_PASS= "";
    $DB_NAME="cloud_db";
    ){
    //процедурный стиль подключения
    // $conn = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
    // mysqli_select_db($conn,DB_NAME) or die("Cannot select DB"); 
	//mysqli_close($conn);

    //oop стиль подключения
    $conn = new mysqli($DB_SERVER,$DB_USER, $DB_PASS, $DB_NAME);

    # Если есть какие-либо ошибки или соединение не в порядке
    if ($conn->connect_error) {
        die ('conn error: '.$conn->connect_error);
    }
    else {
        mysqli_set_charset($conn, "utf8");
       // echo 'conn is OK.<br />'; # For debugging purposes
    }

}
    # Подготовка запроса к базе данных mySQL и получение списка последних 10 значений
   


//     $query = "SELECT * FROM users";
	
// 	$result = mysqli_query( $link,$query);
	
// 	if($result){
// 		while($row = mysqli_fetch_array($result)){
// 			$name = $row["users_login"];
// 			echo "Name: ".$name."<br/>";
// 		}
// 	}
 


//  закрытие соединения
//$conn->close();

