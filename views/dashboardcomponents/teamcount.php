<?php include_once 'dashboarddao.php'?>

<h3 class="title  pb-0">Nombre d'équipes</h3>

<div class="pb-0 pt-20 mb-0" width="300" height="300" style="display: block; height: 300px; width: 300px;">

<section class="flex justify-center">
<?php $sumTeam = getTeamNb()?>
        <a class="text-9xl" href="teams"><?= $sumTeam["count(*)"]?></a>
        </section>
</div>