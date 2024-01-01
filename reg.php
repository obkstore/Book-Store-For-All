<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    if(isset($_POST['submit']))
    {
        $fname = $_POST['first_name'];
        
        $lname = $_POST['last_name'];
       
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
       
        
        $stm = "INSERT INTO users (f_name,l_name,email,username,password,type) VALUES ('$fname','$lname','$email','$username','$password','user');";
        try{
            $conn->exec($stm);
            echo "New record created successfully";
            header("Location: index.html");
      
        }catch(Exception $e)

        {
        echo "error1111";
        }
        $conn = null;
      

    }
    ?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bostorek</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script type="text/javascript">
     
        function chkName() {
            var fname = document.getElementById("first_name");
            if (fname.value == "") {
                alert("please enter first name");
                fname.focus();
                fname.select();
                return false;
            }
        }

       

        function chklName() {
            var lname = document.getElementById("last_name");
            if (lname.value == "") {
                alert("please enter last_name");
                lname.focus();
                lname.select();
                return false;
            }
        }

       
        function chkusername() {
            var username = document.getElementById("username");
            if (username.value == "") {
                alert("please enter username");
                username.focus();
                username.select();
                return false;
            }
        }

        function chkpassword() {
            var password = document.getElementById("password");
            if (password.value == "") {
                alert("please enter password");
                password.focus();
                password.select();
                return false;
            }
        }

        

        function chkPasswords() {
            var password = document.getElementById("password");
            var re_password = document.getElementById("re_password");

            if (password.value != re_password.value) {
                alert("The two passwords are not the same");
                password.focus();
                password.select();
                return false;
            } else
                return true;
        }

       
    </script>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              My Books
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item active">
                                <a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="books.php">books</a>
                            </li>
            </ul>
            <form class="search_form" action="search.php">
              <input type="text" class="form-control" name="searchtxt" placeholder="Search here...">
              <button class="" type="submit" name="search">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bostorek Bookstore
                    </h5>
                    <h1>
                      Everything you need <br>
                      in the world of reading
                    </h1>
                    <p>
                      You will find here all the books you need
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/61Z-R+GMJPS._AC_UF1000,1000_QL80_.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bostorek Bookstore
                    </h5>
                    <h1>
                      Everything you need <br>
                      in the world of reading
                    </h1>
                    <p>
                      You will find here all the books you need
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/img-1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bostorek Bookstore
                    </h5>
                    <h1>
                      Everything you need <br>
                      in the world of reading
                    </h1>
                    <p>
                      You will find here all the books you need
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Registeration
            </h2>
          </div>
          <form action="reg.php" method="POST">
            <div>
            <input type="text" id="first_name" name="first_name" onmouseleave="chkName()" placeholder="First name..." />
            </div>
            <div>
            <input type="text" id="last_name" name="last_name" onmouseleave="chkName()" placeholder="Last name..."/>
            </div>
            <div>
            <input type="email" id="email" name="email" minlength="=6" onmouseleave="chkEmail()" placeholder="Email..."/>
            </div>
            <div>
            <input type="text" id="username" name="username" onmouseleave="chkName()" placeholder="User name..."/>
            </div>
            <div>
            <input type="text" id="password" name="password" onmouseleave="chkName()" placeholder="Password..."/>
              </div>
              <div>
              <input type="text" id="rpassword" name="rpassword" onmouseleave="chkName()" placeholder="Repeat password..."/>
              </div>
            <div >
             <input class="send" type="submit" value="register" name="submit" id="submit"\>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p>
              Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
            </p>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>