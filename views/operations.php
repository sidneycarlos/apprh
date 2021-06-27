<?php

use BWB\Framework\mvc\dao\DAOOperation;

include("./template/navigation.php");
include("./template/header.php");
?>

<? 
    $DAOStaff = new DAOOperation();
    $presentStaffs = $DAOStaff->getPresentStaff();
    $totalStaffs = $DAOStaff->getStaff();
?>


<main class="flex-grow p-6">
  <!-- INSÉRER SON CONTENU DANS LE MAIN -->
  <div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
      <div class="flex justify-center w-full lg:w-5/6">
        <div class="w-2/3 bg-white shadow-md rounded my-6">
          <table class="min-w-max w-full table-auto">
            <thead>
              <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Opérations</th>
                <th class="py-3 px-6 text-left"></th>
                <th class="py-3 px-6 text-center"></th>
                <th class="py-3 px-6 text-center">Effectif</th>
                <th class="py-3 px-6 text-center"></th>
              </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light">
            <? foreach($operations as $index => $operation): ?>
              <tr class=" border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="font-medium"><?= $operation->getJob() ?></span>
                  </div>
                </td>
                <td class="py-3 px-6 text-left">

                </td>
                <td class="py-3 px-6 text-center">

                </td>
                <td class="py-3 px-6 text-center">
                  <span>
                    <?= $presentStaffs[$index]["presentStaff"] ?> /
                  </span>
                  <span>  
                    <?= $totalStaffs[$index]["totalStaff"] ?>
                  </span>
                </td>
                <td class="py-3 px-6 text-right">
                  <a href="employees"><button class="bg-green-200 text-green-500 py-2 px-4 rounded text-xs">Compléter</button></a>
                </td>
              </tr>
              <? endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</main>
<? include("./template/footer.php"); ?>