
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "intern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind

$stmt = $conn->prepare("INSERT INTO ingredients (recipe_id, name) VALUES (?, ?)");
$stmt->bind_param("ss", $pid, $name);

// set parameters and execute
$pid = $_POST["pid"];
$fname = $_POST["name1"];
$lname = $_POST["name2"];
$ename = $_POST["name3"];
$clgname = $_POST["name4"];
$events = array($fname, $lname, $ename, $clgname);
$name = implode(",",$events);
$stmt->execute();

echo "<br />Registered successfully<br />";
echo"Thankyou<br /><br />";



$stmt->close();
$conn->close();

/*var_dump($_POST['name']);
var_dump($_POST["events"]);*/

/*$name = $_POST["name"];
$events = implode(",",$_POST["events"]);
var_dump($name);
var_dump($events);*/

?>