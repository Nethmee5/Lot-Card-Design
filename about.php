<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miss Brownies</title>
    <link rel="stylesheet" href="stylesnews.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header>
        <a href="#home" class="logo"><img src="images/image01.png"></a>

        <nav class="navigate">
            <ul>
                <li><a href="indexnews.php">Home</a></li>
                <li><a href="about.php" class="active">aboutUs</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="file/create.php">Order Online</a></li>
                <li><a href="delivery areas.php">Dilivery Areas</a></li>
            </ul>
        </nav>
        <div id="menu"><i class="fas fa-bars"></i></div>
    </header>
    <section id="home" class="homeabout">
        <h1>ABOUT US</h1>
        <p>we Bake Everything With Love and Care.</p>
    
        
        <!-- <div class="home-btn">
            <button>Book Now<i class="fas fa-angle-right"></i></button>
        </div> -->
    </section>   

    
        <!-- <div class="row">
            <div class="column" style="background-color:#aaa;">
              <h2>About Us</h2>
              <p>Miss Brownies had its beginings somewhere in 2020, when my brother asked me to make brownies for his office get together<br>
                The response we received was overwhelming and that gradually led us to the idea of starting our own business. <br><br><br>

                I grew up in a family where my grandmother & mothers' cooking skills were legenedery.This paired with the constant flow of guests who came over for lunch, tea or dinner, meant that our lives revolved around the large family kitchen,<br>
                 where something was always cooking or baking. Our mother and her four sisters are all exceptional cooks, but our mothers’ forte was baking and hardly a week would go by without a cake being baked at home.
            </p>
            </div>
            <div class="column" style="background-color:#bbb;" width="70px" height="30px">
                <img src="images/cashew.jpg" alt="">
              
            </div>
          </div> -->
          <div class="container">         
            <div class="box">
                <h2>About Us</h2><br>
                <p> Miss Brownies had its beginings somewhere in 2020, when my brother asked me to make brownies for his office get together
                    The response we received was overwhelming and that gradually led us to the idea of starting our own business. <br><br>
    
                    I grew up in a family where my grandmother & mothers' cooking skills were legenedery.This paired with the constant flow of guests who came over for lunch, tea or dinner, meant that our lives revolved around the large family kitchen,
                    where something was always cooking or baking. Our mother and her four sisters are all exceptional cooks, but our mothers’ forte was baking and hardly a week would go by without a cake being baked at home.<br><br>From the very beginning Miss Brownies ethos was to focus on what we do best, which is making brownies from scratch using traditional methods of baking with wholesome ingredients. We firmly believe in the principal that a brownie has to first taste good while its ‘look’ is secondary.<br><br>
                    This belief of taking traditional heirloom recipes and doing it right has worked extremely well for us and the values that were followed at our inception are still very much a part of our core values today – hand crafting each and every brownie using only the freshest and finest ingredients; using local produce whenever available; giving a simple brownie or a special brownie the same care and attention to detail; not using preservatives and making each and every brownie to order ensuring that freshness and quality is never compromised.<br><br>

                    It gives us great pride that while our team at Miss Brownies has grown considerably, some of the members on our team have been with us since the inception. As a team, we are all firm believers that each and every brownie has to be baked not only with the finest ingredients but with heaps of love.

                    As we continue on this journey, we thank each and every one of you who has walked through our doors and taken home a handcrafted brownie from our home to yours.<br><br>

                    With love and gratitude,<br><br>
                    Pabasara & Shanthi Marasinghe


                </p>
            </div>
            <div class="boximg">
                    <img style="width: 100%;" src="images/m and d 2.jpg">
            </div>       
            
        </div>
        <div class="copyright" style="width: 100%;">
            <a href="#home"><i class="fas fa-arrow-circle-up"></i></a>
            <p>Design By&copy;MISS BROWNIES</p>
        </div>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function (){
                $('#menu').click(function () {
                    $(this).toggleClass('fas fa-times');
                    $('.navigate').toggleClass('nav-toggle');
                });
    
                $(window).on('scroll load',function()
                {
                    $('#menu').removeClass('fas fa-times');
                    $('.navigate').removeClass('nav-toggle');
                });
                

                });
            </script> 
</body>

</html>