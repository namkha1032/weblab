<nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/de/HCMUT_official_logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./index.php?page=product&category=all">All</a></li>
            <li><a class="dropdown-item" href="./index.php?page=product&category=manga">Manga</a></li>
            <li><a class="dropdown-item" href="./index.php?page=product&category=anime">Anime</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a href='./index.php?page=insert' class='dropdown-item' style="<?php if (!(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')) echo 'display: none !important;' ?>">Insert</a></li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./index.php?page=contact">Contact</a>
        </li>

      </ul>
      <div class="search-box" style="margin-right:50px">
        <input class="form-control me-2" type="text" placeholder="Search" autocomplete="off" aria-label="Search">
        <div class="result"></div>
      </div>

      <span>Hello <?php
                  if ($_SESSION['weblab']) {
                    echo $_SESSION['username'];
                  } else {
                    echo '';
                  } ?>&nbsp&nbsp&nbsp&nbsp</span>
      <a href="./index.php?page=signup">Signup</a><br>&nbsp&nbsp&nbsp&nbsp
      <a href="./index.php?page=login">Login</a><br>&nbsp&nbsp&nbsp&nbsp
      <a href="./index.php?page=logout-processing">Logout</a>&nbsp&nbsp&nbsp&nbsp
    </div>
  </div>
</nav>