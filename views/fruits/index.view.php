<?php $style = "/css/style_story2.css";?>
<?php $style2 = "/css/kop_stils.css"?>
<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 
    
<h2>Augļi</h2>

    <form>Nosaukums satur: 
        <input name='search_query' placeholder='Atslēgasvārds..' value='<?= $_GET["search_query"] ?? "" ?>'/>
        <button class="search">Atlasīt</button>
    </form>


    <?php if(count($fruits) == 0 ){ ?>
        <p>Sarakstā nav tādu augļu!!</p>
    <?php } ?>

    <ul> 
     <?php foreach ($fruits as $fruit) { ?>
           <li><a href="show?id=<?= $fruit["id"] ?> "><?= $fruit["name"] ?></a></li> 
    <?php } ?>
     </ul>

<!-- php tagu count - 5 -->
<?php require "views/components/footer.php"?>