<?php
try {
    $db=new PDO("mysql:host=localhost;dbname=hastane_otomasyonu;charest=utf8",'root','yemen8873');
    //echo 'vertabanı bağlantısı başarılı';
    
    
} catch (exception $e) 
{
    echo $e->getMessage();
}

?>