<?php $style = "/css/style_story2.css";?>
<?php $style2 = "/css/kop_stils.css"?>
<?php $pageTitle = $fruit["name"];?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2><?= htmlspecialchars($fruit["name"]) ?></h2>

<a href="/edit?id=<?= $fruit["id"] ?> " class="button-link">Rediģēt</a>

<form method="POST" action="/delete">
    <input name="id" value="<?=$fruit['id']?>" type="hidden" />
    <input type="submit" value="Dzēst" class="button"/>
</form>


<?php require "views/components/footer.php"?>