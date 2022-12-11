<?php require "./components/head.php"; ?>

<section class="col-md-10 col-12">

  <div class="row">
    <?php
    $id = $_GET['id'];
    $query = "SELECT * from products WHERE id = '$id'";
    $result = $conn->query($query)->fetch_all(MYSQLI_ASSOC)[0];
    $imgurl = $result['imgurl'];
    ?>
    <div class="col-2 mb-4">
      <div class='card h-100'>
        <div class="card-header">
          <h5 class='card-title'><?= $result['name'] ?></h5>
        </div>
        <div class='card-body'>
          <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center" style="height:200px">
              <img src='<?= $imgurl ?>' style="max-height:100%;max-width:100%">
            </div>
            <div class="col-12" style="height:120px">
              <dl class="row mt-2">
                <dt class="col-sm-5">Price</dt>
                <dd class="col-sm-7"><?= $result['price'] ?></dd>

                <dt class="col-sm-5">Category</dt>
                <dd class="col-sm-7"><?= $result["category"] ?></dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require "./components/foot.php"; ?>