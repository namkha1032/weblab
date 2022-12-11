<?php require "./components/head.php"; ?>

<section class="col-md-10 col-12">
    <h2>THIS IS UPDATE PAGE</h2>
    <?php
    if (isset($_SESSION['insert_errors'])) {
        foreach ($_SESSION['insert_errors'] as $error) {
            echo "<p> ${error} </p>";
        }
        unset($_SESSION['insert_errors']);
    }

    ?>
    <?php
    require_once 'database.php';
    $name = '*';
    $cat = 'anime';
    $currcat = 'anime';
    if (isset($_GET['category'])) {
        $currcat = strtolower($_GET['category']);
    }
    if (isset($_GET['name'])) {
        $name = strtolower($_GET['name']);
    }
    $query = "SELECT * FROM products
                WHERE name='${name}'";
    $result = mysqli_query($conn, $query);
    $obj = mysqli_fetch_assoc($result);
    $category = $obj['category'];
    $price = $obj['price'];
    $imgurl = $obj['imgurl'];
    ?>
    <form action='./index.php?page=update-processing&category=<?= $currcat ?>&name=<?= $name ?>' method='POST' class='row g-3'>
        <div class='col-12'>
            <label for='product_name' class='form-label'>Name</label>
            <input type='text' class='form-control' name='product_name' value='<?= $name ?>' required>
        </div>
        <div class='col-md-4'>
            <label for='category' class='form-label'>Category</label>
            <select name='category' class='form-select' required>
                <option>anime</option>
                <option>manga</option>
            </select>
        </div>
        <div class='col-md-5'>
            <label for='price' class='form-label'>Price</label>
            <input type='text' value='<?= $price ?>' class='form-control' name='price' required>
        </div>
        <div class='col-md-3'>
            <label for='imgurl' class='form-label'>Imgurl</label>
            <input type='text' value='<?= $imgurl ?>' class='form-control' name='imgurl'>
        </div>
        <div class='col-12'>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </div>
    </form>

</section>
<?php require "./components/foot.php"; ?>