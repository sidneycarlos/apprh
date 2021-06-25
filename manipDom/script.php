<?php

$db = null;

/**
 * @return /PDO
 */
function getDB(){
    global $db;
    $dsn = "mysql:dbname=mydb;host=172.17.0.1;port=3306";
    if($db == null)
        $db = new PDO($dsn, "root", "root");
    return $db;
}


/**
 * 
 * @return id d'un employé
 */
function getEmployeeId(){

}


/**
 * supprime la card d'un employé lorsque le bouton affecté est cliqué
 */
?>
<script>
function removeCard(){
    document.getElementById("affectBtn").addEventListener("click", function(){
        function removeCard(){
            var card = document.getElementById("card");
            while(card.firstChild){
            card.removeChild(card.firstChild);
            }
        }
        
        
    });
}

</script>
<?


/**
 * met à jour le nombre d'employés affichés sur la page
 */
function updateView(){

}
