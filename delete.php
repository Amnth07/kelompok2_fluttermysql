<?php
$connection = new mysqli("localhost","root","","flutter_mysql");

$id = $_POST['id'];

$result = mysqli_query($connection, "delete from note_app where id=" .$id);

if($result){
    echo json_encode(([
        'message' => 'Data input succesfully'
    ]));
}else{
    echo json_encode([
        'message' => 'Data failed to input'
    ]);
}