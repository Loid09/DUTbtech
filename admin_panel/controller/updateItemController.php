<?php
include_once "../config/dbconnect.php";

$id = $_POST['id'];
$texte_name = $_POST['Texte'];


$updateItem = mysqli_query($conn, "UPDATE texteSite SET Texte='$texte_name' WHERE id=$id");




if ($updateItem) {
    echo "true";
} else {
    echo mysqli_error($conn);
}
