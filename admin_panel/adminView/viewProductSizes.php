<div>
  <h2>All Entreprise</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nom Entreprise</th>
        <th class="text-center">Nom</th>
        <th class="text-center">Tel</th>
        <th class="text-center">Adresse</th>
        <th class="text-center">Email</th>
        <th class="text-center">Catalogue</th>
        <th class="text-center">Souscrire</th>
        <th class="text-center">Rdv</th>
        <th class="text-center">Apport</th>
        <th class="text-center">Commentaire</th>
        <th class="text-center">Fait Le</th>
        <!-- <th class="text-center" colspan="2">Action</th> -->
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from entreprise";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $count ?></td>
          <td><?= $row["nom_entreprise"] ?></td>
          <td><?= $row["nom_prenom"] ?></td>
          <td><?= $row["tel"] ?></td>
          <td><?= $row["adresse"] ?></td>
          <td><?= $row["mail"] ?></td>
          <td><?= $row["catalogue"] ?></td>
          <td><?= $row["souscrire"] ?></td>
          <td><?= $row["rdv"] ?></td>
          <td><?= $row["apport"] ?></td>
          <td><?= $row["commentaire"] ?></td>
          <td><?= $row["Fait_le"] ?></td>
          <!-- <td><button class="btn btn-primary" style="height:40px" onclick="variationEditForm('<?= $row['id'] ?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="variationDelete('<?= $row['id'] ?>')">Delete</button></td> -->
        </tr>
    <?php
        $count = $count + 1;
      }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Size Variation
  </button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Size Variation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addVariationController.php" method="POST">

            <div class="form-group">
              <label>Product:</label>
              <select name="product">
                <option disabled selected>Select product</option>
                <?php

                $sql = "SELECT * from entreprise";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nom_entreprise'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Size:</label>
              <select name="size">
                <option disabled selected>Select size</option>
                <?php

                $sql = "SELECT * from entreprise";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nom_entreprise'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="qty">Stock Quantity:</label>
              <input type="number" class="form-control" name="qty" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Variation</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>


</div>