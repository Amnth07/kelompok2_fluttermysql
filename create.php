<?php
$connection = new mysqli("localhost","root","","flutter_mysql");
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

$result = mysqli_query($connection,"insert into note_app set title='$title',content='$content',date='$date'");

if($result){
    echo json_encode(([
        'message' => 'Data input succesfully'
    ]));
}else{
    echo json_encode([
        'message' => 'Data failed to input'
    ]);
}