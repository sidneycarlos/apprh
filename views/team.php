
<? include("./template/navigation.php"); ?>
<? include("./template/header.php"); ?>


<!-- INSÉRER SON CONTENU DANS LE MAIN -->
<main class="w-full flex-grow p-6">
<div class="text-left"><p class="text-3xl ..."> Opérations en cours </p><br>
</div>

    
    <!-- Big container -->
    <div class="text-blueGray-700 antialiased">
        
        <!-- Smaller container -->
        <div class="px-6 md:px-12 mx-auto w-full">

            <!-- Cards -->
            
            <div class="flex flex-wrap justify-around">
            
               <? foreach($teams as $team): ?>

                <div class="w-full lg:w-3/12 xl:w-3/12 px-4 mb-14 mr-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg w-78">
                        <div class="flex-auto p-10">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        
                                    </h5>
                                    <h5 class="capitalize font-semibold text-xl text-blueGray-700">
                                        <p><?= $team->getAssignment() ?> #<?= $team->getTeamId() ?></p>
                                    </h5>
                                    <span class="text-blueGray-400 uppercase font-bold text-xs">
                                        <p>Effectif équipe : <?= $team->getTotalStaff() ?></p> 
                                    </span>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <? endforeach ?>

            </div>

        </div>
    
    
    
    </div>

</main>

<? include("./template/footer.php");?>
