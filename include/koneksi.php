<?php
try 
{
    $DBH = new PDO("mysql:host=localhost;dbname=db_pesta", "root", "");
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     
} catch (PDOException $e) {
    echo "Terjadi error..";
    echo $e->getMessage();
}
error_reporting(0);

?>