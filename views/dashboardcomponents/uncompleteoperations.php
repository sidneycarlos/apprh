<?php include_once 'dashboarddao.php'?>
<h3 class="title pb-0">Opérations non pourvues</h3>

<div class="pb-0 pt-20" width="300" height="300" style="display: block; box-sizing: border-box; height: 300px; width: 300px;">

    <section class="flex justify-center">
        <?php $uncomp = getUncompleteOperations();?>
        <a class="text-9xl" href="operations"><?= $uncomp["count(employee_operation.present)"] ?></a>
    </section>
</div>