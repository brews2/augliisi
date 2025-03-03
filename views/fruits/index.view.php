<?php $style = "/css/style_story2.css";?>
<?php $style2 = "/css/kop_stils.css"?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Augliishi</h2>

    <form>Nosaukums: 
        <input name='search_query' placeholder='Ieraksti' value='<?= $_GET["search_query"] ?? "" ?>'/>
        <button class="search">Atlasit</button>
    </form>


    <?php if (count($fruits) == 0) { ?>
    <p>Tads auglis netika atrasts 😢</p>
    <img src="sad.jpg" alt="No fruits available" width="200">
<?php } ?>


    <ul> 
     <?php foreach ($fruits as $fruit) { ?>
           <li><a href="show?id=<?= $fruit["id"] ?> "><?= $fruit["name"] ?></a></li> 
    <?php } ?>
     </ul>


<?php require "views/components/footer.php"?>