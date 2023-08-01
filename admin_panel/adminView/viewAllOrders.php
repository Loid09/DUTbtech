<div id="ordersBtn">
  <h2>Texte Site</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>Texte</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from texteSite";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?= $row["id"] ?></td>
          <td><?= $row["libelle"] ?></td>
          <td><?= $row["Texte"] ?></td>
          <td><button class="btn btn-secondary" style="height:40px" onclick="texteEditForm('<?= $row['id'] ?>')">Update</button></td>
          <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?TexteID=<?= $row['id'] ?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php

      }
    }
    ?>

  </table>

</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">Texte Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="order-view-modal modal-body">

      </div>
    </div><!--/ Modal content-->
  </div><!-- /Modal dialog-->
</div>
<script>
  //for view order modal  
  $(document).ready(function() {
    $('.openPopup').on('click', function() {
      var dataURL = $(this).attr('data-href');

      $('.order-view-modal').load(dataURL, function() {
        $('#viewModal').modal({
          show: true
        });
      });
    });
  });
</script>