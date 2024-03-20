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


</head>

<body>
    <?php $page = 'blog';
    include('components/navbar.php') ?>
    <section class="p-5 bg-white breadcrumb-bg">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-0">Our <span style="color: #F48E2B;">Blog</span></h1>
                </div>
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb " class="page-breadcrumb">
                        <ol class="breadcrumb my-2" style="float: right;">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- content start -->
    <section class="blog py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
                    <h1 class="blog-title">Welcome to Our Interior Design Blog</h1>
                    <p style="text-shadow: 1px 1px #3F3D52;text-align:justify">
                        Welcome to SS Modular Interior's blog, where inspiration meets innovation. Explore our curated collection of articles and design insights to elevate your living spaces and discover the latest trends in interior design. From home decor tips to room makeovers, our blog is your go-to resource for all things design.
                    </p>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
    <section class="blog1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
                    <h1 class="blog-title" style="text-shadow: none;">Unveiling Design Delights:</h1>
                    <p style="text-align:justify">
                        Dive into a treasure trove of design delights curated by our passionate team of interior experts. From the latest industry trends to timeless classics, our blog is a canvas that celebrates the art of transforming spaces. Each post is a journey, an exploration of textures, hues, and the finer details that elevate ordinary spaces into extraordinary expressions of personal style.
                    </p>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
    <!-- content end -->



    <!-- start footer -->
    <?php include('components/footer.php') ?>
    <!-- end footer -->

    <script src="js/main.js"></script>
    <script src="js/jquery-3.7.0.min (1).js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>