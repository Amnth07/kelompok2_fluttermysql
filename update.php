<?php
$connection = new mysqli("localhost","root","","flutter_mysql");
$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['id'];

$result = mysqli_query($connection,"update note_app set title='$title',content='$content' where id='$id'");

if($result){
    echo json_encode(([
        'message' => 'Data edit succesfully'
    ]));
}else{
    echo json_encode([
        'message' => 'Data failed to update'
    ]);
}