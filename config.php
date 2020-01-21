<?php

function chargerClasse($classe)
{
require 'class/'.$classe . '.class.php'; 
}

spl_autoload_register('chargerClasse');



try
{
global $bd ;
$bd= new PDO('mysql:host=localhost;dbname=celima', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}