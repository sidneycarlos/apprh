<?php

use BWB\Framework\mvc\dao\DAOEmployee;

include("./template/navigation.php");
include("./template/header.php");

?>

<main class="w-full flex-grow p-6">
    <!-- INSÉRER SON CONTENU DANS LE MAIN -->
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 50%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
    <h2>Liste d'opération à pourvoir</h2>
    
    <table>
      <tr>
        <th>Opérations</th>
        <th>Capacité</th>
        <th>Dispo</th>
      </tr>
      <tr>
        <td>#1</td>

        <td><input type="range" list="tickmarks">
        <datalist id="tickmarks">
        <option value="0" label="0%">
        <option value="10">
        <option value="20">
        <option value="30">
        <option value="40">
        <option value="50" label="50%">
        <option value="60">
        <option value="70">
        <option value="80">
        <option value="90">
        <option value="100" label="100%">
        </datalist></td>
        
        <td><input type="button" name="lien1" value="Compléter" 
            onclick="self.location.href='/views/employees.php'" style="background-color:#ffffff" style="color:white; font-weight:bold"onclick></td>
      </tr>
      
    </table>
</main>

<? include("./template/footer.php");?>
