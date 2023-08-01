<div >
  <h2>All Etudiants</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nom </th>
        <th class="text-center">Tel</th>
        <th class="text-center">Mail</th>
        <th class="text-center">Nom Ecole</th>
        <th class="text-center">Emplacement</th>
        <th class="text-center">Hackathon</th>
        <th class="text-center">Theme</th>
        <th class="text-center">DigitaMiss</th>
        <th class="text-center">Miss Name Project</th>
        <th class="text-center">Miss description Project</th>
        <th class="text-center">Miss description Teams</th>
        <th class="text-center">Commentaire</th>
        <th class="text-center">Fait le</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from etudiant ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["nom"]?> <?=$row["prenom"]?></td>
      <td><?=$row["tel"]?></td>
      <td><?=$row["mail"]?></td>
      <td><?=$row["nom_ecole"]?></td>
      <td><?=$row["emplacement"]?></td>
      <td><?=$row["hackathon"]?></td>
      <td><?=$row["theme"]?></td>
      <td><?=$row["digitalMiss"]?></td>
      <td><?=$row["miss_name_project"]?></td>
      <td><?=$row["miss_description_project"]?></td>
      <td><?=$row["miss_description_teams"]?></td>
      <td><?=$row["commentaire"]?></td>
      <td><?=$row["Fait_le"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>