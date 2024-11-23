<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>FlashCard</title>
    <link style="height: 50px; width: 50px;" rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />

</head>
<body style="background-color: cadetblue;">
    <div>
        <!-- HEADER -->
         <header class="header">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item logo-item">
                        <img class="logo-item" src="{{ asset('imgs/logoflashcard_blue.png') }}" alt="">
                    </li>
                    <li class="nav-item">
                        <!-- <div class="dropdown">
                            <button class="dropdown-btn">Chủ đề</button>
                            <div class="dropdown-content">
                                <div class="dropdown-item">
                                    <span>Bài thi</span>
                                    <div class="submenu">
                                        <a href="#">IELTS</a>
                                        <a href="#">TOEFL</a>
                                        <a href="#">TOEIC</a>
                                        <a href="#">Xem tất cả</a>
                                    </div>
                                </div>
                            <div class="dropdown-item">
                                <span>Nghệ thuật và nhân văn</span>
                            </div>
                            <div class="dropdown-item">
                                <span>Ngôn ngữ</span>
                            </div>
                            <div class="dropdown-item">
                                <span>Toán học</span>
                            </div>
                            <div class="dropdown-item">
                                <span>Khoa học</span>
                            </div>
                            <div class="dropdown-item">
                                <span>Khoa học xã hội</span>
                            </div>
                            <div class="dropdown-item">
                                <span>Khác</span>
                            </div>
                            </div>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <h1>Bạn muốn học như thế nào? </h1>
                <p>Nắm vững kiến thức đang học với thẻ ghi nhớ tương tác, bài kiểm tra thử và hoạt động học tập của Quizlet.</p>
                <button>Đăng Kí Miễn Phí</button>
                <p>Đã có tài khoản <a href="">Đăng nhập</a></p>
            </div>
         </header>

          <!-- MAIN -->
           <div class="container-fluid main-content">
            <div class="container-fluid content-part--one">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
                </div>
            <!-- ---------- -->
            </div>
           </div>



    </div>
    
</body>
</html>