<?php require 'vendor/autoload.php';

$path = explode("/", @$_GET["path"]);

$response = [
    'error_code' => 1,
    'error_message' => 'Invalid method'
];

if(@$path[0] === "users"){

    if(@$path[1] === "getAllUsers"){
    
        $users = new APP\User();
        $users = $users->getAllUsers();
        $response = $users;

    }

    if(@$path[1] === "getSpecificUser"){
    
        $user = new APP\User();
        $user = $user->getSpecificUser($path[2]);
        $response = $user;

    }

}

echo json_encode($response);