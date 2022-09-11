<?php

if(isset($_POST['title']) && trim($_POST['name']) != ""){
    echo "Welcome! Successfully Registerd on to the network!";
}else{
    echo "Ooops...Something went wrong!";
}
?>