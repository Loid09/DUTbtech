<div class="container p-5">

  <h4>Edit Texte</h4>
  <?php
  include_once "../config/dbconnect.php";
  $ID = $_POST['record'];
  $qry = mysqli_query($conn, "SELECT * FROM texteSite WHERE id='$ID'");
  $numberOfRow = mysqli_num_rows($qry);
  if ($numberOfRow > 0) {
    while ($row1 = mysqli_fetch_array($qry)) {
      $catID = $row1["id"];
  ?>
      <form id="update-Items" enctype='multipart/form-data' method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="idTexte" name="idTexte" value="<?= $row1['id'] ?>" hidden>
        </div>
        <div class="form-group">
          <label for="texteU">Texte:</label>
          <textarea name="texteU" id="texteU" class="form-control" cols="30" rows="10"> <?= $row1['Texte'] ?> </textarea>
        </div>
        <div class="form-group">
          <button type="submit" style="height:40px" onclick="updateTexte()" class="btn btn-primary">Update Texte</button>
        </div>
    <?php
    }
  }
    ?>
      </form>

</div>