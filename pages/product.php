<?php require "./components/head.php"; ?>
<section class="col-md-10 col-12">
  <div class="row">
    <?php
    $catName = 'manga';
    $query = "SELECT * from products";
    if (isset($_GET['category'])) {
      $catName = strtolower($_GET['category']);
      if ($catName == "all") {
        $query = "SELECT * from products";
      } else {
        $query = "SELECT * from products
                    where category='$catName'";
      }
    }
    $result = mysqli_query($conn, $query);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    // Print item
    foreach ($items as $item) {
      $name = $item["name"];
      $price = $item["price"];
      $imgurl = $item["imgurl"];
      $id = $item["id"];
    ?>
      <div class="col-2 mb-4">
        <div class='card h-100'>
          <div class="card-header">
            <h5 class='card-title'><?= $name ?></h5>
          </div>
          <div class='card-body'>
            <div class="row">
              <div class="col-12 d-flex align-items-center justify-content-center" style="height:200px">
                <img src='<?= $imgurl ?>' style="max-height:100%;max-width:100%">
              </div>
              <div class="col-12" style="height:120px">
                <dl class="row mt-2">
                  <dt class="col-sm-5">Price</dt>
                  <dd class="col-sm-7"><?= $price ?></dd>

                  <dt class="col-sm-5">Category</dt>
                  <dd class="col-sm-7"><?= $item["category"] ?></dd>
                </dl>
                <div class="d-flex align-items-center justify-content-around">
                  <a href='./index.php?page=profile&id=<?= $id ?>' class='btn btn-sm rounded-pill btn-outline-success'>View</a>
                  <a href='./index.php?page=update-processing&category=<?= $catName ?>&name=<?= $name ?>' class='btn btn-sm rounded-pill btn-outline-primary' style="<?php if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')) echo 'display: none !important;' ?>">UPDATE</a>
                  <a href='./index.php?page=delete-processing&category=<?= $catName ?>&name=<?= $name ?>' class='btn btn-sm rounded-pill btn-outline-danger' style="<?php if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')) echo 'display: none !important;' ?>">DELETE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>
<?php require "./components/foot.php"; ?>