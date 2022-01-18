<?php $title='Mon espace perso'?>

<?php ob_start(); ?>

<?php if($filter == 1) {    ?>
<h1>PAGE RESERVE AUX ADMINISTRATEURS</h1>

    Modifier une campagne : <br/><br/>
    Nom de la campagne : <?php echo $MyCampagne[7] . '</br>';?>
    Description de la campagne : <?php echo $MyCampagne[6] . '</br>';?>
    Points minimum pour qu'un événement soit remarqué : <?php echo $MyCampagne[4] . '</br>';?>
    Points attribués aux donateurs (non modifiables après le début de la campagne) : <?php echo $MyCampagne[3] . '</br>';?>
    Date de début (année-mois-jour) : <?php echo $MyCampagne[1] . '</br>';?>
    Date de fin (année-mois-jour) : <?php echo $MyCampagne[2] . '</br><br/>';?>
    <form action="/" method="POST" name="traitementrequetescampagnemodifier">
        Modifier le titre de cette campagne : <input type="text" name="campName" /><br/>
        Modifier la description de cette campagne  : <textarea type="text" name="campDescription"></textarea><br/>
        Modifier le nombre de points minimum pour qu'un événement soit remarqué : <input type="number" name="minPointsCamp" /><br/>
        Modifier la date de début : <input type="date" name="dateDebCamp" /><br/>
        Modifier la date de fin : <input type="date" name="dateFinCamp" /><br/><br/>
        Attention, les dates suivantes sont déjà prises par les campagnes suivantes : <br/>
        <?php
        for ($i = 0; $i < sizeof($_SESSION['AllCampagnes']); ++$i){
            echo $_SESSION['AllCampagnes'][$i][7] . ' : ' . $_SESSION['AllCampagnes'][$i][1] . ' au ' . $_SESSION['AllCampagnes'][$i][2] . '<br/>';
        }
        ?>

        <input type="submit" name="action" value="Modifier une Campagne"/> <br/>
    </form><br/>
    <?php echo $_SESSION['CampagneChange'] . '</br>'; ?>
    <a href="gestionCampagneChoice.php">Choisir une autre campagne à modifier</a><br/>
    <a href="index.php">Retour</a>

    </div>


    <?php
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php')?>
