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
        <td>Opération #1</td>
        <td>*/*</td>
        <td><input type="button" name="lien1" value="Compléter" 
            onclick="self.location.href='/views/employees.php'" style="background-color:#ffffff" style="color:white; font-weight:bold"onclick></td>
      </tr>
      
    </table>
</main>