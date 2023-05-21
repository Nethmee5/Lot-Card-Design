<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miss Brownies</title>
    <link rel="stylesheet" href="stylesnews.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="script1.js"></script>
</head>
<body>
    <header>
        <a href="#home" class="logo"><img src="images/image01.png"></a>

        <nav class="navigate">
            <ul>
                <li><a href="indexnews.php" class="active">Home</a></li>
                <li><a href="about.php">aboutUs</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="file/create.php">Order Online</a></li>
                <li><a href="delivery areas.php">Dilivery Areas</a></li>
            </ul>
        </nav>
        <div id="menu"><i class="fas fa-bars"></i></div>
    </header>
    <section id="home" class="home">
        <h1>Your Dream, Our Brownie</h1>
        <p>we Bake Everything With Love and Care.</p>
    </section>

    <section id="about" class="about">
        <div class="about-content">
            <h2>OUR STORY</h2>
            <p>We believe we are here to make this world a more delightful place, <br> by being a fresh bakery delight for kids and adults that is tastier, yummier and also healthier!<br>
               Brownies had always been a simple side dessert, never ingrained as birthday cakes or an evergreen family ice cream treat.<br>
                </p>
            
        </div>
        <div class="image">
            <img src="images/ANIMATION.jpg" alt="img">
        </div>
    </section>




   <section class="product" id="product">
        <h1 class="title">Our Shop </h1>
        <div class="brownie-product">
            <div class="inner-brownie-row">
                <div class="inner-brownie-col">
                    <img src="images/cashew.jpg" alt="">
                    <div class="brownie-price">
                        <p>LKR 240.00</p>
                    </div>
                    <div class="cake-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h2>Cashew Brownies</h2>
                </div>

              <div class="inner-brownie-col">
                    <img src="images/chochip.jpg" alt="">
                    <div class="brownie-price">
                        <p>LKR 250.00</p>
                    </div>
                    <div class="cake-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h2>Brownie with Chocochips</h2>
                </div>



                <div class="inner-brownie-col">
                    <img src="images/nutella 3.jpg" alt="">
                    <div class="brownie-price">
                        <p>LKR 225.00</p>
                    </div>
                    <div class="cake-star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h2>Fudgy Nutella Brownies</h2>               
                </div>
            </div>
        </div>  
        <br><br><br><br><br><br>
        <h1 class="title">Reviews</h1>
        <div class="container">  
            <div class="box">
                <div class="imgbox">
                    <img src="images/ppp1.jpg">
                </div>
                <p>“YUM! THESE ARE SOO TASTY! WOULD DEFO RECOMMEND! THEY ARE BEAUTIFULLY PRESENTED AND CAREFULLY SELECTED. LOVELY WARMED SLIGHTLY”</p>
                <h4>Heshani Wijewantha<br><span>Software Engineer</span></h4>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="images/ppp2.jpg">
                </div>
                <p>“MY WIFE AND I LOVED THE BROWNIES. THESE ARE THE BEST BROWNIES THAT I HAVE EVER HAD... AND I HAVE HAD MY FAIR SHARE!</p>
                <h4>Aravinda Marasinghe<br><span>Business Analyst</span></h4>
            </div>
            <div class="box">
                <div class="imgbox">
                    <img src="images/person num3.jpg">
                </div>
                <p>“QUALITY, FRESHNESS AND CERTAINLY TASTINESS OF THESE BROWNIES WERE TOP NOTCH! REALLY A SPECIAL TREAT. BROUGHT THEM TO A FAMILY PARTY AND LOVED HOW THE GUESTS TOLD US THEY’D BE ORDERING THEM TO BRING TO THEIR FRIEND’S PARTY! </p>
                <h4>Sameera Senananayake<br><span>Senior software Engineer</span></h4>
            </div>       
            
        </div>
    </section>
            <div class="contact" id="contact"> 
                <div class="cake-contact">
                    <div class="cake-contact-row">
                        <div class="cake-contact-col">
                            <img style="width: 100%;" src="images/contactimg.jpg" alt="img" class="images">
                        </div>
                        <div class="cake-contact-col">
                            <h1>Contact Us</h1>
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-pinterest"></i>
                            </div>
                            <p>383/04,AMBULGAMA ROAD,PANAGODA,HOMAGAMA</p>
                            <p>We want to hear from you, write us:</p>

                            
                            
                            <form id="form"class="form">
                            <label for= "name">Name</label>
                            <input type="text"id="firstname" placeholder="Please enter your name">
                            <small>Error message</small>
                            
                            
                            <label for= "mail">Email</label>
                            <input type="text"id="email" placeholder="Please enter your email">
                            <small>Error message</small>

                            <label for= "phone">Mobile No</label>
                            <input type="text"id="mobile" placeholder="Please enter your Mobile No">
                            <small>Error message</small>

                            
                            <textarea row ="8" col="10"id="msg" placeholder="Give your opinion"></textarea>
                            <small>Error message</small>

                            <button>Submit</button>

                        </div>
                            
                            


  
                             </form>

                             <!-- <! <form id="formdetails onsubmit="validate()" method="get">;
                            <input type="text" name="name" id="name" placeholder="Please Enter Your Name" required>
                            <input type="text" name="email" id="email" placeholder="Please Enter Your E-mail" required>
                            <input type="text" name="mobile" id="mobile" placeholder="Please Enter Your Mobile No." required>
                            <textarea row="8" col="10" name="msg" placeholder="Give Your Opinion"></textarea>
                            <button class="btn">Submit<i class="fas fa-angle-right"></i></button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>

                <footer class="mapfooter"> 
                    <div class="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316.45576016665444!2d80.02773640671434!3d6.876052106541907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253c123d60193%3A0x8256706c1538abce!2s383%20Panagoda%20-%20Embulagama%20Rd!5e0!3m2!1sen!2slk!4v1680765693077!5m2!1sen!2slk" width="1800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <iframe src="https://www.google.com/maps/dir/6.8766486,80.0277014/383+Panagoda+-+Embulagama+Rd/@6.8780144,80.0256114,15.7z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3ae253c123d60193:0x8256706c1538abce!2m2!1d80.0278054!2d6.8761675!3e0" 
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                    </div>            

                    <div class="copyright" style="width: 100%;">
                        <a href="#home"><i class="fas fa-arrow-circle-up"></i></a>
                        <p>Design By&copy;MISS BROWNIES</p>
                    </div>
                </footer>   
                






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script>
        $(document).ready(function () {
            $('#menu').click(function () {
                $(this).toggleClass('fas fa-times');
                $('.navigate').toggleClass('nav-toggle');
            });

            $(window).on('scroll load',function()
            {
                $('#menu').removeClass('fas fa-times');
                $('.navigate').removeClass('nav-toggle');
            });

            $('.service .cake-list .btn1').click(function () {
                $(this).addClass('active').siblings().removeClass('active');

                let src = $(this).attr('data-src');
                $('#cake-img').attr('src', src);
            });

        });

    </script> -->


</body>

</html>