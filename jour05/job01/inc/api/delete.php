<?php
    require_once("../classes/User.php");

    if($_SERVER["REQUEST_METHOD"] == "DELETE") {
        $user->delete();
        echo json_encode(true);

    } else {
        echo json_encode("delete method n'exist pas !");
    }