<?php
header('Content-type: text/javascript');

$json = array(
    'success' => false,
    'result' => 0
);

if(isset($_POST["first"], $_POST["second"])){

    $json['result'] = (int) $_POST['first'] + (int) $_POST['second'];
    $json['success'] = true;
}



echo json_encode($json);


