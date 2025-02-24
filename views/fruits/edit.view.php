<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Rediģē";?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2>Labo augļa nosaukumu!</h2>
<form method="POST">
<input name="name" value="<?= htmlspecialchars($_POST["name"] ?? $fruits['name'] ?? '') ?>"/>

<input name="id" type="hidden" value="<?=$fruits['id']?>"/>
<button class="search">Saglābt</button>

<?php if(isset($errors["name"])) { ?>
       <p><?= $errors["name"] ?></p>
<?php } ?>


</form>

<?php require "views/components/footer.php"?>