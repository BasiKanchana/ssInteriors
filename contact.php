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
    <?php $page = 'contact';
    include('components/navbar.php') ?>
    <section class="p-5 bg-white breadcrumb-bg">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-0">Contact<span style="color: #F48E2B;">Us</span></h1>
                </div>
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb " class="page-breadcrumb">
                        <ol class="breadcrumb my-2" style="float: right;">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <!--page title end-->

    <!--contact start-->
    <section class="contactus-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="contactus-text">Get a free design consultation for your home.</p>
                </div>
                <div class="col-lg-6" style="background-color: #ffffff00;">
                    <div class="card border-0">
                        <div class="card-body ">
                            <div class="card-title p-3  text-white" style="background-color: #F48E2B"> <strong> Contact Us For Help</strong>
                            </div>
                            <form action="mail.php" method="post" role="form" class="php-email-form">
                                <div class="form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Mobile Number" required />
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                                </div>

                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center py-2">
                                    <input type="submit" class="btn" style="background-color: #F48E2B; color:#ffff" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d892.1066269155384!2d78.38769408540358!3d17.443038225171517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1706525585818!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    <!-- start footer -->
    <?php include('components/footer.php') ?>
    <!-- end footer -->

    <script src="js/main.js"></script>
    <script src="js/jquery-3.7.0.min (1).js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>