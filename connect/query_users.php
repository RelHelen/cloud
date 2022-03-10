<?php
include 'constants.php';
// $conn = new mysqli($DB_SERVER,$DB_USER, $DB_PASS, $DB_NAME);
// if ($conn->connect_error) {
//     die ('conn error: '.$conn->connect_error);
// }
$conn = mysqli_connect($DB_SERVER,$DB_USER, $DB_PASS, $DB_NAME);

//include_once('bd.php');
//connect();
    $query = "SELECT * FROM users";	
	$result = mysqli_query($conn,$query);
	$rowsCount = mysqli_num_rows($result); // количество полученных строк
	//echo "Количество записей=".$rowsCount."<br/>";;
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			 $MyArray[]=$row;
			 $name = $row["users_login"];
			 $userpass = $row["users_password"];
			// echo "Name: ".$name. "  Pass: ".$userpass."<br/>";
		}
		mysqli_free_result($result);
	}
	else{
		echo "Ошибка: " . mysqli_error($conn);
	}
	// Возвращает JSON-представление данных
	echo(json_encode(['records'=>($MyArray)]));

	mysqli_close($conn);
/*
	$response = array();
	$query2 = "SELECT * FROM roles";
	
	$result2 = mysqli_query( $conn,$query2);
 
$response["items"] = array();
$rol = array();
while($row2 = mysqli_fetch_assoc($result2)){
    

    $rol["id"] = $row2["roles_id"];
    $rol["title"] = $row2["roles_name"];

    array_push($response["items"], $rol);
	//print_r($response);
}
$response["success"] = 1;
echo '<br><br><br>roles:  '.json_encode($response);
	//mysqli_close($conn);
*/
// Функция mysqli_fetch_array() выбирает текущую строку из набора в переменную $row и переходит к следующей. Когда строк не останется, метод возвратит false, и произойдет выход из цикла.

// После окончания работы с полученным набором строк мы можем очистить отведенную для него память с помощью функции mysqli_free_result(), в которую передается полученный набор строк:

   
