<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Interiors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--  -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Star modal  -->
    <div class="modal fade " id="exampleModal" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="background-image: linear-gradient(#5DE0E6, #004AAD);">
                <div class="text-right m-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include("conatct-form.php") ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->
    <?php $page = 'home';
    include('components/navbar.php') ?>

    <!-- Start Carousel -->
    <section class="carousel-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Carousel -->
    <!--Start Registration form -->
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class="index-form">
        <h3 class="text-danger">Registration </h3>

        <label class="index-label" for="name">Name</label>
        <input class="index-input" type="text" placeholder="Enter Your Name" id="name">

        <label class="index-label" for="username">Email Id</label>
        <input class="index-input" type="email" placeholder="Enter Your mail" id="email">


        <label class="index-label" for="tel">Phone No</label>
        <input class="index-input" type="tel" placeholder="Enter Your Number" id="tel">

        <button class="my-2 submit-btn">Submit</button>

    </form>
    <!-- End Registration form -->
    <!-- Start Why Choose SS Interiors -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="title">Why Choose SS Interiors</h3>
                    <div class="row row-cols-1 row-cols-md-4 g-4 py-4  pl-5">
                        <div class="col ">
                            <div class="card h-100 border border-0 align-item-center">
                                <img src="img/installation_days.svg" class="card-img-top w-50 m-auto" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border border-0">
                                <img src="img/homes_completed.svg" class="card-img-top w-50 m-auto" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border border-0">
                                <img src="img/design_experts.svg" class="card-img-top w-50 m-auto" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border border-0">
                                <img src="img/material_warranty.svg" class="card-img-top w-50 m-auto" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose SS Interiors -->

    <!-- Start Owl-Carousel -->
    <section class="" style="background-color:#818285;">

        <h1 class=" title pt-4 text-center">Our Interior Designs</h1>

        <div class="container">
            <div class="card-carousel">
                <div class="card" id="1">
                    <!-- <div class="image-container"></div>
                    <p>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p> -->
                    <img src="img/1.jpg" class="w-100" height="400px" alt="1.jpg">
                </div>
                <div class="card" id="2">
                    <img src="img/7.jpg" class="w-100" height="400px" alt="6.jpg">
                </div>
                <div class="card" id="3">
                    <img src="img/3.jpg" class="w-100" height="400px" alt="3.jpg">
                </div>
                <div class="card" id="4">
                    <img src="img/4.jpg" class="w-100" height="400px" alt="4.jpg">
                </div>
                <div class="card" id="5">
                    <img src="img/5.jpg" class="w-100" height="400px" alt="5.jpg">
                </div>
            </div>
            <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
        </div>


    </section>

    <!-- End Owl-Carousel -->

    <!-- Start End-to-end offerings-->
    <section>
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="px-5">End-to-end offerings</h4>
                    <div class="slider-wrapper">
                        <button id="prev-slide1" class="slide-button1 material-symbols-rounded">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <ul class="image-list">
                            <img class="image-item" src="img/1.jpg" alt="img-1" />
                            <img class="image-item" src="img/3.jpg" alt="img-2" />
                            <img class="image-item" src="img/4.jpg" alt="img-3" />
                            <img class="image-item" src="img/5.jpg" alt="img-4" />
                            <img class="image-item" src="img/7.jpg" alt="img-5" />
                            <img class="image-item" src="img/8.jpg" alt="img-6" />
                            <img class="image-item" src="img/9.jpg" alt="img-7" />
                            <img class="image-item" src="img/10.jpg" alt="img-8" />
                            <img class="image-item" src="img/11.jpg" alt="img-9" />
                            <img class="image-item" src="img/12.jpg" alt="img-10" />
                        </ul>
                        <button id="next-slide1" class="slide-button1 material-symbols-rounded">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <!-- <div class="slider-scrollbar">
                        <div class="scrollbar-track">
                            <div class="scrollbar-thumb"></div>
                        </div>
                    </div> -->
                </div>
            </div>
    </section>
    <section>
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="px-5">Modular Kitchen Designs</h4>
                    <div class="slider-wrapper2">
                        <button id="prev-slide2" class="slide-button2 material-symbols-rounded">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <ul class="image-list2">
                            <img class="image-item" src="img/1.jpg" alt="img-1" />
                            <img class="image-item" src="img/3.jpg" alt="img-2" />
                            <img class="image-item" src="img/4.jpg" alt="img-3" />
                            <img class="image-item" src="img/5.jpg" alt="img-4" />
                            <img class="image-item" src="img/7.jpg" alt="img-5" />
                            <img class="image-item" src="img/8.jpg" alt="img-6" />
                            <img class="image-item" src="img/9.jpg" alt="img-7" />
                            <img class="image-item" src="img/10.jpg" alt="img-8" />
                            <img class="image-item" src="img/11.jpg" alt="img-9" />
                            <img class="image-item" src="img/12.jpg" alt="img-10" />
                        </ul>
                        <button id="next-slide2" class="slide-button2 material-symbols-rounded">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <!-- <div class="slider-scrollbar2">
                        <div class="scrollbar-track">
                            <div class="scrollbar-thumb"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <div class="container px-5">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="px-5">Modular Living Room</h4>
                <div class="slider-wrapper3">
                    <button id="prev-slide3" class="slide-button3 material-symbols-rounded">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <ul class="image-list3">
                        <img class="image-item" src="img/1.jpg" alt="img-1" />
                        <img class="image-item" src="img/3.jpg" alt="img-2" />
                        <img class="image-item" src="img/4.jpg" alt="img-3" />
                        <img class="image-item" src="img/5.jpg" alt="img-4" />
                        <img class="image-item" src="img/7.jpg" alt="img-5" />
                        <img class="image-item" src="img/8.jpg" alt="img-6" />
                        <img class="image-item" src="img/9.jpg" alt="img-7" />
                        <img class="image-item" src="img/10.jpg" alt="img-8" />
                        <img class="image-item" src="img/11.jpg" alt="img-9" />
                        <img class="image-item" src="img/12.jpg" alt="img-10" />
                    </ul>
                    <button id="next-slide3" class="slide-button3 material-symbols-rounded">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <!-- <div class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container px-5">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="px-5">Wardrobe Designs</h4>
                <div class="slider-wrapper4">
                    <button id="prev-slide4" class="slide-button4 material-symbols-rounded">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <ul class="image-list4">
                        <img class="image-item" src="img/1.jpg" alt="img-1" />
                        <img class="image-item" src="img/3.jpg" alt="img-2" />
                        <img class="image-item" src="img/4.jpg" alt="img-3" />
                        <img class="image-item" src="img/5.jpg" alt="img-4" />
                        <img class="image-item" src="img/7.jpg" alt="img-5" />
                        <img class="image-item" src="img/8.jpg" alt="img-6" />
                        <img class="image-item" src="img/9.jpg" alt="img-7" />
                        <img class="image-item" src="img/10.jpg" alt="img-8" />
                        <img class="image-item" src="img/11.jpg" alt="img-9" />
                        <img class="image-item" src="img/12.jpg" alt="img-10" />
                    </ul>
                    <button id="next-slide4" class="slide-button4 material-symbols-rounded">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
                <!-- <div class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- start footer -->
    <?php include('components/footer.php') ?>
    <!-- end footer -->

    <!-- End End-to-end offerings-->
    <script src="js/main.js"></script>
    <script src="js/jquery-3.7.0.min (1).js"></script>
    <!--  <script src="js/bootstrap.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $(window).ready(function() {
            $("#exampleModal").modal('show');
        });
    </script>
</body>

</html>