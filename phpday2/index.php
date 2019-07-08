<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root"; 
$password = "" ; 
$dbname = "my_test_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error());
}
// // Create database
// $sql = "CREATE DATABASE $dbname";
// if  (mysqli_query($conn, $sql)) {
//    echo "Database $dbname created successfully! \n";
// } else {
//    echo "Error creating database $dbname: " . mysqli_error($conn);
// }
// sql to create table
// $sql = "CREATE TABLE Users (
// user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(20) NOT NULL,
// lastname VARCHAR(20) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )" ;
// if (mysqli_query($conn, $sql)) {
//    echo "Table Users created successfully"  . "\n";
// } else {
//    echo  "Error creating table: " . mysqli_error($conn) . "\n";
// }

// insert data into table
// $sql = "INSERT INTO Users (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@doe.com')";
// if (mysqli_query($conn, $sql)) {
//     echo "New record created.\n";
// } else {
//    echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
// }

// retrieve data
$sql = "SELECT user_id, lastname, firstname FROM Users";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row 
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row[ "user_id"], $row["lastname"],$row["firstname"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);

// sql to update a record in the Users table
$sql = "UPDATE Users SET lastname='Dane' WHERE user_id=2";


// sql to delete a record from the Users table
$sql = "DELETE FROM Users WHERE user_id=3";


// delete table
// $sql = "DROP TABLE Users";
// if (mysqli_query($conn, $sql)) {
//     echo "Table Users deleted successfully" . "\n";
// } else  {
//    echo "Error deleting table: " . mysqli_error($conn) . "\n" ;
// }
mysqli_close($conn);
?>
</body>
</html>