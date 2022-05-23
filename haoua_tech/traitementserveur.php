<?PHP
require_once('connexion.php');
$proprietaire=$_POST['proprietaire'];
$Pays=$_POST['Pays'];
$Localite=$_POST['Localite'];
$contact=$_POST['Contact'];
$site=$_POST['adresse'];

$q=$pdo->prepare('INSERT INTO liste_serveur (proprietaire, Pays, Localite, Contact, adresse)VALUES(?,?,?,?,?)');
$params=array($proprietaire,$Pays, $Localite, $contact, $site);
$q ->execute($params);


?>

<!-- $q=$pdo->prepare('INSERT INTO liste_serveur (proprietaire, Pays, Localite, Contact, adresse)VALUES(?,?,?,?,?)');
$q=$pdo->prepare('INSERT INTO liste_serveur (proprietaire, Pays, Localite, Contact, adresse)VALUES(:proprietaire, :Pays, :Localite, :contact, :adresse)'); -->