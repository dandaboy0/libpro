<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=libpro;','root', '');
} catch(Exception $e){
    exit("Unable to connect database.booksale mysql_error()");
}
?>