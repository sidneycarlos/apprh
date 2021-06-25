<?php


/**
 * Ajoute un employé à une tache, incrémente l'effectif sur l'opération
 */
function addEmployeeToOperation(){

}


/**
 * supprime la card d'un employé lorsque le bouton affecté est cliqué
 */
?>
<script>
document.getElementById("affect").addEventListener("click", function(){
    function removeCard(){
        var card = document.getElementById("card");
        while(card.firstChild){
        card.removeChild(card.firstChild);
        }
    }
    
    removeCard();
});
</script>
<?


/**
 * met à jour le nombre d'employés affichés sur la page
 */
function updateView(){

}
