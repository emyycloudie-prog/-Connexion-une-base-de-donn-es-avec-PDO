emyycloudie
emyycloudie_85742
En ligne

NISERIN — 11/03/2026 10:49
ta ana
NISERIN — 11/03/2026 12:30
?php
$students = [
    ["prenom" => "niserin", "age" => 21, "group" => "dwb103"],
    ["prenom" => "hafsa", "age" => 21, "group" => "dwb103"],
    ["prenom" => "iman", "age" => 21, "group" => "dwb103"],
    ["prenom" => "chaimae", "age" => 21, "group" => "dwb103"],
    ["prenom" => "sokaina", "age" => 21, "group" => "dwb103"]

];
if (isset($_POST['ok'])){
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$group=$_POST['group'];
if(empty($prenom)empty($age)
empty($group)){
    echo" les champs vide ";
}
else{
   if(!is_numeric($age)){
    echo" age non nombre ";
   }
 else{
    $students[]=[
    "prenom"=>$prenom,
    "age"=>$age,
    "group"=>$group,
    ];


 }
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
      <form method="POST"    >

<input type="text" name="prenom">NOM
<input type ="text" name="age">age
<input type="text" name="group">group
<button type="submit" name="ok">ok</button>
      </form>
    <table border="1">
        <thead>
            <tr>
                <th>prenom </th>
                <th>age</th>
                <th>group</th>

            </tr>

        </thead>

        <tbody>
            <?php
            foreach ($students as $levele) {
                echo "<tr>
                <th>{$levele["prenom"]}</th>
                <th>{$levele["age"]}</th>
                <th>{$levele["group"]}</th>
                </tr>
                ";
            }
            ?>
        </tbody>



    </table>






</body>

</html>












</tbody>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <input type="text" name=" nom">
    <input type="text" name=" prénom">
    <input type="number" name="l'age"
    <button type="submit" name="envoyer">envoyer<button>


<?php
if (isset($_POST['ok'])){
    $nom=$_POST["nom"];
    $prénom=$_POST["prénom"]
    $lage=$_POST["lage"]
    if(empty($nom))(empty($prenom))
(empty($age)){
        else if ($age<=18){
            echo"âge doit être supérieur à 18";
        }
       else {
     $email = $nom".".$prenom".".$lage."@ofpp.ma";
     echo "générer un email";
       }
    }

}
?> hada akhir metihan kan aetatena ousada
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="qte">
    <input type="number" name="prix">
    <button type="submit" name ="ok">ok</button>

</form>
<?php
function calculerprix($prix,$qte){
    $total=$prix$qte;
    if($qte>=10){
        $total=$total-($total0.1);

    }
  return $total;

}
if(isset($_POST['ok'])){
    $prix=$_post['prix'];
    $qte=$_post['qte'];
    if(empty($prix)empty($qte))
       { echo"champs vide"}
    elseif($qte<=0 
 $prix<=0){
        echo "champs négative"
    };
    else{ echo calculerprix($prix,$qte)};

    }
    ?>
</body>
</html>  hada fonction
NISERIN — 12/03/2026 13:28
sared cood
emyycloudie — 12/03/2026 13:48
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Nom de produit:
        <input type="text" name="nom"><br><br>
        Prix:
        <input type="number" name="prix"><br><br>
        Promotion:
        <select name="promo">
            <option value="oui">oui</option>
            <option value="non">non</option>
        </select><br><br>
        <button type="submit" name="ok">ok</button>
    </form>
</body>
</html>

<?php 
if (isset($_POST['ok'])){
    $nom = trim($_POST['nom']);
    $prix = $_POST['prix'];
    $promo = $_POST['promo'];

    if(empty($nom)  empty($prix) 
 empty($promo)){
        echo "All fields must be filled <br>";
    }

    if($promo == "oui"){
        $prix_final = $prix - ($prix * 0.10);
        echo "Promo is 10%, prix final: " . $prix_final . "<br>";
    }
    else {
        echo "No promo <br>";
    }

    $produits = [
        "nom" => $nom,
        "prix" => $prix,
        "promotion" => $promo,
    ];

    foreach ($produits as $key => $value){
        echo $key . ": " . $value . "<br>";
    }
}
?>
NISERIN — 13/03/2026 11:44
أنشئي صفحة PHP فيها فورم فيه :

📋 الحقول

🏷️ Nom du produit (text)

💰 Prix (text)

📦 Quantité (number)

🎯 Type de client (select) :

Normal

Fidèle

🔘 Bouton Submit

⚙️ المطلوب بعد الضغط على Submit

1️⃣ جميع الحقول خاصها تكون معمّرة
2️⃣ الثمن خاصو يكون رقم
3️⃣ الكمية خاصها تكون أكبر من 0

🎁 القواعد

إذا كان العميل Fidèle ➜ يحصل على تخفيض 15%

إذا كانت الكمية ≥ 10 ➜ يحصل على تخفيض إضافي 5%

التخفيضات يمكن يتجمعو

📊 المطلوب عرض النتائج

اطبعي :

✅ Nom du produit

✅ Prix initial

✅ Prix après réduction

✅ Quantité

✅ Prix total (prix final × quantité)

🚫 ملاحظات

❌ ما تستعمليش functions (حالياً)
❌ ما تستعمليش tableaux
✔️ غير if / else + POST

✨ ملي تسالي حطي الكود ديالك هنا
وغادي نصححو ليك خطوة بخطوة حتى تولّي متمكنة 💪🔥

إلى بغيتي من بعد نعطيك:

تمارين أصعب 😈

تمارين OFPPT style examen 📝

مشروع صغير panier 🛒
emyycloudie — 24/03/2026 08:39
hada
NISERIN — 09/04/2026 12:23
<?php
$host = 'localhost';
$dbname = 'blogdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base $dbname";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
NISERIN — 10:21
<?php
require 'config.php';
if (isset($_GET['nom']) && isset($_GET['email'])) {
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $stmt = "DELETE FROM utilisateurs WHERE id=:id";
    $stmt = $pdo->prepare($stmt);
    $stmt->execute(["id"=>$id]);
}else{
    echo "id non trove ";
}

    

suprimir.php
1 Ko
<?php
require 'config.php';
$stmt = "SELECT * FROM utilisateurs ";
$stmt = $pdo->query($stmt);
$utilisateur = $stmt->fetchall(PDO::FETCH_ASSOC);
$utilisateur = [

selcet.php
1 Ko
<?php
$host = 'localhost';
$dbname = 'blog';
$username = 'root';
$password = '';

config.php
1 Ko
<?php
require 'config.php';
$stmt = "INSERT INTO utilisateurs
(nom,email)value(:nom,:email)";
$stmt = $pdo->prepare($stmt);

add.php
1 Ko
NISERIN — 10:31
<?php
try {
    $pdo= new PDO("mysql:host=localhost;dbname=blogdb",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion rÃ©ussie";

connexion.php
1 Ko
﻿
<?php
try {
    $pdo= new PDO("mysql:host=localhost;dbname=blogdb",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion rÃ©ussie";

} catch (PDOException $e) {
    echo " erreur de connexion : " .$e->getMessage();
}


try {
   $pdo->query("SELECT * FROM table_inexistante");
} catch (PDOException $e) {
    echo " erreur SQL : " . $e->getMessage();

}catch (PDOException $e){ 
    file_put_contents('erreurs.log', $e->getMessage(), FILE_APPEND);
    echo " une erreur est survenue. Contactez l'administrateur ";
}

