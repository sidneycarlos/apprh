<?php include_once 'dashboarddao.php'?>

<h3 class="title pb-0">Effectif total</h3>

<div class="pb-0 pt-20 mb-0" width="300" height="300" style="display: block; height: 300px; width: 300px;">

    <section class="flex justify-center">
    
    <?php $sumTeam = getSumEmployee()?>
        <a class="text-9xl" href="staff"><?= $sumTeam["count(serial)"]?></a>
    </section>
</div>