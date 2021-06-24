<?php

use BWB\Framework\mvc\dao\DAOEmployee;

include("./template/navigation.php");
include("./template/header.php");

?>

<main class="w-full flex-grow p-6">
    <!-- INSÉRER SON CONTENU DANS LE MAIN -->
    <div class="container mx-auto flex justify-center">
    <div class="grid grid-cols-2 flex gap-4">
        <div class="p-10 border-2 rounded-lg bg-white text-gray-600"><?php include '/var/www/html/views/charttemplate/uncompleteoperations.php'?></div>
        <div class="p-10 border-2 rounded-lg bg-white text-gray-600"><?php include '/var/www/html/views/charttemplate/employeechart.php'?></div>
        <div class="p-10 border-2 rounded-lg bg-white text-gray-600"><?php include '/var/www/html/views/charttemplate/workforce.php'?></div>
        <div class="p-10 border-2 rounded-lg bg-white text-gray-600"><?php include '/var/www/html/views/charttemplate/teamcount.php'?></div>

    </div>
</div>
</main>

<? include("./template/footer.php");?>