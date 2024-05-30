<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=bd_school", "root");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>