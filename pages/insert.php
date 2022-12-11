<?php require "./components/head.php" ?>
<section class="col-md-10 col-12">
    <h2>THIS IS INSERT PAGE</h2>
    <?php
    if (isset($_SESSION['insert_errors'])) {
        foreach ($_SESSION['insert_errors'] as $error) {
            echo "<p> ${error} </p>";
        }
        unset($_SESSION["insert_errors"]);
    }
    ?>

    <form action="./index.php?page=insert-processing" method="POST" class="row g-3">
        <div class="col-12">
            <label for="product_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Your Name,..." required>
        </div>
        <div class="col-md-4">
            <label for="category" class="form-label">Category</label>
            <select name="category" class="form-select" required>
                <option>Choose...</option>
                <option>anime</option>
                <option>manga</option>
            </select>
        </div>
        <div class="col-md-5">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" required>
        </div>
        <div class="col-md-5">
            <label for="imgurl" class="form-label">Image URL (not required)</label>
            <input type="text" class="form-control" name="imgurl">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</section>
<?php require "./components/foot.php" ?>