<?php
include "connexion.php";

if(isset($_POST["id"]) && isset($_POST["vendeur"]) && isset($_POST["client"]) && isset($_POST["ad_client"]) && isset($_POST["date_fac"]) && isset($_POST["num_fac"]) && isset($_POST["date_echeance"]) && isset($_POST["ref"]) && isset($_POST["info_add"]) && isset($_POST["description"]) && isset($_POST["qte"]) && isset($_POST["prix_un_HT"]) && isset($_POST["%TVA"]) && isset($_POST["total_TVA"]) && isset($_POST["total_TTC"]))
{
    $id=$_POST["id"];
    $vendeur=$_POST["vendeur"];
    $client=$_POST["client"];
    $ad_client=$_POST["ad_client"];
    $date_fac=$_POST["date_fac"];
    $num_fac=$_POST["num_fac"];
    $date_echeance=$_POST["date_echeance"];
    $ref=$_POST["ref"];
    $info_add=$_POST["info_add"];
    $description=$_POST["description"];
    $qte=$_POST["qte"];
    $prix_un_HT=$_POST["prix_un_HT"];
    $TVA=$_POST["%TVA"];
    $total_TVA=$_POST["total_TVA"];
    $total_TTC=$_POST["total_TTC"];

    $req=mysqli_query($link,"INSERT INTO `facture` (`id`, `vendeur`, `client`, `ad_client`, `date_fac`, `num_fac`, `date_echeance`, `ref`, `info_add`, `description`, `qte`, `prix_un_HT`, `%TVA`, `total_TVA`, `total_TTC`) VALUES ('$id','$vendeur','$client','$ad_client','$date_fac','$num_fac','$date_echeance','$ref','$info_add','$description','$qte','$prix_un_HT','$TVA','$total_TVA','$total_TTC')");

    if($req)
    {
        echo"Vendeur: <strong>$vendeur</strong><br>
        Client: <strong>$client</strong><br><br>
        Date facturation: <strong>$date_fac</strong><br>
        Date d'échéance: <strong>$date_echeance</strong><br>
        Description: <strong>$description</strong><br>
        Quantité: <strong>$qte</strong><br>
        Total TVA: <strong>$total_TVA</strong><br>
        Total TTC: <strong>$total_TTC</strong><br>";
        
    
    }
    else
    {
        echo"erreur d'insertion";
    }
}
?>