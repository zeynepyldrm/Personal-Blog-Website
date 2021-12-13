<?php


function status(){
    if($_POST === true) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

echo json_encode(status());

?>