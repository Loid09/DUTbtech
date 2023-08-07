<?php

$texte_name = $_POST['trueTexte'];
$id = $_POST['id'];

$server = "localhost";
$user = "root";
$password = "";
$db = "dut";
// swiss_collection
$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

//$updateItem = mysqli_query($conn, "UPDATE `textesite` SET `Texte` = '$texte_name' WHERE `id` = $id");
// create new line with Texte

//$sql = "UPDATE texteSite SET `Texte` = 'Teste à Changer' WHERE `id` = $id";
$sql = "UPDATE texteSite SET `Texte` = $texte_name WHERE `id` = $id";
$result = $conn->query($sql);


if ($updateItem) {
    echo "true";
} else {
    echo mysqli_error($conn);
}
