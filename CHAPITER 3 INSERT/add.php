<?php
require 'config.php';
$stmt = "INSERT INTO utilisateurs
(nom,email)value(:nom,:email)";
$stmt = $pdo->prepare($stmt);

if (isset($_POST['add'])) {
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    if (empty($email)||empty($nom)) {
        echo "les champs vide";
    }else{
        $stmt->execute(
        ["nom"=>$nom,"email"=>$email]
        );
    }
}

?>



