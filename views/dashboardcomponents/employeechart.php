<?php include_once 'dashboarddao.php'?>

<h3>Répartition effectifs</h3>
<canvas id="myChart"></canvas>
<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script>
        // Stockage des données dans un tableau associatif
        const data = {
            labels: [ //liste des intitulés: présents, congés => légende
                'Présents',
                'Absents',
            ],
            datasets: [{ //tableau associatif avec les propriétés du graphique type doughnut
                label: 'Répartition des effectifs', //String => titre du graphique
                <?php 
                $pres = getEmployeePresent();//liste : somme des employés présents
                $abs = getEmployeeAbsent();//liste : somme des employés absents
                ?>
                data: [<?=$pres["count(present)"]?>, <?=$abs["count(present)"]?>], 
                backgroundColor: [ // couleur des labels
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)'                    
                ],
                hoverOffset: 10 //déplacement au passage de la souris
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                layout: {
                    padding: 5
                },
                
            }
        };
//modif
        

        
        
//end modif
        // === include 'setup' then 'config' above ===

        //instanciation d'un objet Chart qui a 2 arguments
        var myChart = new Chart(document.getElementById('myChart').getContext("2d"), config);
        var ctx = document.getElementById("MyChart").onClick = function(evt) {
            var activePoint = myChart.getElementAtEvent();
        console.log(myChart);
            if (activePoint.length > 0) {
                var clickedDatasetIndex = activePoint[0]._datasetIndex;
                var clickedElementindex = activePoint[0]._index;
                var label = myChart.data.labels[clickedElementindex];
                var value = myChart.data.datasets[clickedDatasetIndex].data[clickedElementindex];     
                alert("Clicked: " + label + " - " + value);
            }
        }
        //resize de la taille du canvas: https://www.chartjs.org/docs/latest/configuration/responsive.html

        //myChart.canvas.parentNode.style.height = '500px';
        //myChart.canvas.parentNode.style.width = '500px';
    </script>
</div>