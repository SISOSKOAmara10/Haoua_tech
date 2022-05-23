<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['id'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM Liste_serveur WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('le prietaire n\'existe pas avec cet ID!');
    }

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
          
            $stmt = $pdo->prepare('DELETE FROM contacts WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the contact!';
        } else {
     
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Delete')?>

<div class="content delete">
	<h2>Supprimer Serveur #<?=$proprietaire['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Etes vous de supprumer ce serveur? #<?=$contact['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$proprietaire['id']?>&confirm=yes">OUI</a>
        <a href="delete.php?id=<?=$proprietaire['id']?>&confirm=no">NON</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>