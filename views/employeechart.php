<h3>Répartition effectifs</h3>
<canvas id="myChart"></canvas>
<div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Stockage des données dans un tableau associatif
        const data = {
            labels: [ //liste des intitulés: présents, congés, arrêts => légende
                'Présents',
                'Congés',
                'Arrêts'
            ],
            datasets: [{ //tableau associatif avec les propriétés du graphique type donut
                label: 'Répartition des effectifs', //String => titre du graphique
                data: [300, 50, 100], //liste => présents, congés, arrêts en chiffre (int)
                backgroundColor: [ // liste => couleur des labels
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
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
                }
            }
        };

        // === include 'setup' then 'config' above ===

        var myChart = new Chart( //instanciation d'un objet Chart qui a 2 arguments
            document.getElementById('myChart'),
            config
        );


        //resize de la taille du canvas: https://www.chartjs.org/docs/latest/configuration/responsive.html

        //myChart.canvas.parentNode.style.height = '500px';
        //myChart.canvas.parentNode.style.width = '500px';
    </script>
</div>