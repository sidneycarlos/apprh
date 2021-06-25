<?php include_once 'dashboarddao.php'?>
<h3 class="title">Opérations non pourvues</h3>

<div width="300" height="300" style="display: block; box-sizing: border-box; height: 300px; width: 300px;">
    <section class="flex justify-center">
        <?php $uncomp = getUncompleteOperations();?>
        <a class="text-9xl" href=""><?= $uncomp["count(employee_operation.present)"] ?></a>
    </section>
</div>