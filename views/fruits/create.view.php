<?php $style = "css/style_story2.css";?>
<?php $style2 = "css/kop_stils.css"?>
<?php $pageTitle = "Izveido";?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Izveido augli</h2>
<form method="POST">
    <label>Nosaukums: <input name="name" value="<?=$_POST['name'] ?? '' ?>"/></label>
    
    <button class="search">Save</button>

<?php if(isset($errors["name"])) { ?>
       <p><?= $errors["name"] ?></p>
<?php } ?>


</form>
<?php require "views/components/footer.php"?>