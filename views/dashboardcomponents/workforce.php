<?php include_once 'dashboarddao.php'?>

<h3 class="title">Effectif total</h3>

<div width="300" height="300" style="display: block; box-sizing: border-box; height: 300px; width: 300px;">
    <section class="flex justify-center">
    
    <?php $sumTeam = getSumEmployee()?>
        <a class="text-9xl" href=""><?= $sumTeam["count(serial)"]?></a>
    </section>
</div>