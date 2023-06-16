<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cupcake</title>
    <!-- Main File CSS -->
    <link rel="stylesheet" href="CSS/CakeCandy.css" />
    <!-- Normalize -->
    <link rel="stylesheet" href="CSS/normalize.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="CSS/all.min.css" />
    <!-- Font Page -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Start header -->
    <div class="header">
        <div class="container">
            <a href="#">
                <img src="Images/cake0.png" alt="" />
            </a>
            <nav>
                <i class="bars fa-solid fa-bars"></i>
                <ul>
                    <li>
                        <a href="#sections">Sections</a>
                    </li>
                    <li>
                        <a href="#">Order-Now</a>
                    </li>
                    <li>
                        <a href="#">Contact-Us</a>
                    </li>
                    <li>
                        <a href="#">About-Us</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        @auth
                        @else
                        <a href="{{ route('login') }}">Sign in</a>
                        @endif
                    </li>
                    <li>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Sign up</a>
                        @endif
                        @endauth
                    </li>
                </ul>
                <i class="search fa-solid fa-magnifying-glass"></i>
            </nav>
        </div>
    </div>
    <!-- End header -->
    <!-- Start landing -->
    <div class="landing">
        <div class="text">
            <h2>Welcome to Bancelle Store</h1>
                <i class="fa-regular fa-face-smile-beam"></i>
                <p>As always we bring you new<br>and delicious varieties, with lots of love and affection</p>
        </div>
        <a class="go-down" href="#sections"><i class="arrow fa-solid fa-angles-down"></i></a>
    </div>
    <!-- End landing -->
    <!-- Start Sections -->
    <div id="sections" class="cake-sections">
        <h2 class="main-heading">Cake Sections</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="Images/cake1.png" alt="">
                </div>
                <div class="content">
                    <h4>Birthday Cake</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Images/cake2.png" alt="">
                </div>
                <div class="content">
                    <h4>Bundt Cake</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Images/cake3.png" alt="">
                </div>
                <div class="content">
                    <h4>Coconut Cake</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Images/cake4.png" alt="">
                </div>
                <div class="content">
                    <h4>Chocolate Bundt</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Images/cake5.png" alt="">
                </div>
                <div class="content">
                    <h4>Cheesecake</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Images/cake6.png" alt="">
                </div>
                <div class="content">
                    <h4>Cupcake</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates impedit, earum eos veritatis nostrum illum</p>
                </div>
                <div class="order">
                    <i class="fa-solid fa-cake-candles"></i>
                    <a href="#">Order Now</a>
                    <i class="fa-solid fa-angles-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sections -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>Cupcake</h3>
            </div>
            <div class="box">
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Jordan, Amman, Inside, Building No. 201</div>
                </div>
            </div>
            <div class="box">
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 AM To 18:00 PM</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- Main File JS -->
    <script src="js/CakeCandy.js"></script>
</body>
</html>
