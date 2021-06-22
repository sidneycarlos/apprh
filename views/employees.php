<?php

use BWB\Framework\mvc\dao\DAOEmployee;

include("./template/header.php");
include("./template/navigation.php");


// $this->render("base", array(
//     "template"=>$this->render("employees", array(
//         "template"=>(new DAOEmployee())->getAll()
//     ))
// ));

$employees = new DAOEmployee();
$employees->getAll();

echo "<pre>";
var_dump($employees);
echo "</pre>";
?>

<main class="w-full flex-grow p-6">
    <!-- INSÉRER SON CONTENU DANS LE MAIN -->

    <!-- Big container -->
    <div class="text-blueGray-700 antialiased">
        
        <!-- Smaller container -->
        <div class="px-4 md:px-10 mx-auto w-full">

            <!-- Cards -->
            <div class="flex flex-wrap justify-around">
                
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        John
                                    </h5>
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        Doe
                                    </h5>
                                    <span class="text-blueGray-400 uppercase font-bold text-xs">
                                        Manutention
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                        <i class="fas fa-user-astronaut fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <button class="text-orange-500 mr-2">Disponible</button>
                                <button type="button" class="w-full border text-base font-medium text-black bg-white hover:bg-gray-100 px-4 py-2">
                                    Affecter
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        Martine
                                    </h5>
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        Michu
                                    </h5>
                                    <span class="text-blueGray-400 uppercase font-bold text-xs">
                                        Conception
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                        <i class="fas fa-user-astronaut fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <button class="text-orange-500 mr-2">Disponible</button>
                                <button type="button" class="w-full border text-base font-medium text-black bg-white hover:bg-gray-100 px-4 py-2">
                                    Affecter
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        Thomas
                                    </h5>
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        Dupont
                                    </h5>
                                    <span class="text-blueGray-400 uppercase font-bold text-xs">
                                        Testeur
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                        <i class="fas fa-user-astronaut fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <button class="text-orange-500 mr-2">Disponible</button>
                                <button type="button" class="w-full border text-base font-medium text-black bg-white hover:bg-gray-100 px-4 py-2">
                                    Affecter
                                </button>
                            </p>
                        </div>
                    </div>
                </div> -->


            </div>

        </div>
    
    
    
    </div>

</main>
<? include("./template/footer.php");?>