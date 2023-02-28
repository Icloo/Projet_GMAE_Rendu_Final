<?php 
require('../model/connect-bdd.php');
$articles = $bdd->query('SELECT * FROM assurance ORDER BY id_assu DESC');
while($a = $articles->fetch()) { ?>


<div class="partenaire">
    <a href="article.php?id=<?= $a['id_assu'] ?>">
    <img src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" class="logo">
    <h3><?= $a['nom_assu'] ?></h3>
    <p class="desc"><?= $a['desc_assu'] ?></p>
    <a class="bouton_ensavoirplus" href="article.php?id=<?= $a['id_assu'] ?>">Afficher la suite →</a>
</div>

<?php } ?>