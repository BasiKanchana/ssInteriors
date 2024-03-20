<!-- Start Navbar -->
<header>
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-lg-12 p-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo-white.png"  width="350px" alt="ssinteriors" class="logo">
                            <!-- SS Interiors -->
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse px-5" id="navbarSupportedContent" >
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
                                <li class="nav-item mx-3">
                                    <a class="nav-link <?php if($page=='home') {echo 'active';} ?>" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link <?php if($page=='about'){echo 'active';} ?>" href="about.php">About us</a>
                                </li>
                                <li class="nav-item dropdown mx-3">
                                    <a class="nav-link dropdown-toggle <?php if($page=='services'){echo 'active';} ?>" href="about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="modularkitchen.php">Modular Kitchen</a></li>
                                        <li><a class="dropdown-item" href="wardrobe.php">Wardrobe</a></li>
                                        <li><a class="dropdown-item" href="bedroom.php">Bed Room</a></li>
                                        <li><a class="dropdown-item" href="livingroom.php">Living Room</a></li>
                                        <li><a class="dropdown-item" href="bathroom.php">Bath Room</a></li>
                                        <!-- <li><a class="dropdown-item" href="designgallery.php">Design Gallery</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li class="nav-item mx-3">
                                    <a class="nav-link <?php if($page=='about'){echo 'active';} ?>" aria-disabled="true" href="projectportfolio.php" >Project Portfolio</a>
                                </li> -->
                                <li class="nav-item mx-3">
                                    <a class="nav-link <?php if($page=='blog'){echo 'active';} ?>" aria-disabled="true" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link <?php if($page=='contact'){echo 'active';} ?>" aria-disabled="true" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                            <a class="btn  btn btn-outline-danger" href="#" role="button">Register Now</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- End Navbar -->