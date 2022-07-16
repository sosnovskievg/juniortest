<?php
include 'connection.php';
if(isset($_POST["divcheckboxes"])){
     
    $divcheckboxes = $_POST["divcheckboxes"];
    foreach($divcheckboxes as $item){
        $sql= "delete from table1 where id = '$item'";
        $result= $link->query($sql);
        }
        if($link->query($sql)){
         
            header("Location: index.php");
        }
        else{
            header("Location: index.php");
        }
    //$result->free();
}
else header("Location: index.php");
?>