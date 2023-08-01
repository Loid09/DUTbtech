<div>
  <h3>All Université</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nom Université</th>
        <th class="text-center">Nom Ecole</th>
        <th class="text-center">Adresse</th>
        <th class="text-center">Contact</th>
        <th class="text-center">Tel</th>
        <th class="text-center">Email</th>
        <th class="text-center">Commentaire</th>
        <th class="text-center">Fait Le</th>
        <!-- <th class="text-center" colspan="2">Action</th> -->
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from universite";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $count ?></td>
          <td><?= $row["nom_universite"] ?></td>
          <td><?= $row["nom_ecole"] ?></td>
          <td><?= $row["adresse"] ?></td>
          <td><?= $row["contact"] ?></td>
          <td><?= $row["tel"] ?></td>
          <td><?= $row["mail"] ?></td>
          <td><?= $row["commentaire"] ?></td>
          <td><?= $row["Fait_le"] ?></td>
          <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
          <!-- <td><button class="btn btn-danger" style="height:40px" onclick="universiteDelete('<?= $row['id'] ?>')">Delete</button></td> -->
        </tr>
    <?php
        $count = $count + 1;
      }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Category
  </button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Category Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Category Name:</label>
              <input type="text" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div> -->

    </div>
  </div>


</div>