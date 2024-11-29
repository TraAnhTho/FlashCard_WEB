<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <!-- <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    /> -->
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
    <title>Learn FlashCard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />
</head>
<body style="background-color: #111347;">
    <div class="home-container">
        <header class="home-header header" >
            <div class="home-nav-container nav-container container-fluid flex-row">
                <div class="bar-item" role="button" tabindex="0">
                <i class="icon-white icon-home fa-solid fa-bars" ></i>
                </div>
                <div class="logo-item">
                    <img class="logo-item" src="{{ asset('imgs/logoflashcar_white.png') }}" alt="Ảnh không hiển thị">
                </div>
                <ul class="home-nav nav flex-row">
                    <li class="home-nav-item search-item" style="">
                        <input type="text"  placeholder=" 🔎︎ Tìm kiếm câu hỏi" />
                    </li>
                    <li class="home-nav-item" >
                        <button class="" style=""> <i class="icon-white fa-solid fa-plus"></i></button>
                    </li>
                    <li class="home-nav-item">
                        <button class="or" onclick="window.location.href='{{  url('/premium')}}'"><div>Nâng cấp: dùng thử 7 ngày</div></button>
                    </li>
                    <li class="home-nav-item user-item" role="button" tabindex="0">
                        <img class="home-img-circle" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị">
                    </li>
                </ul>
            </div>
            <div class="user-profile flex-row">
                <!-- <div class=""> -->
                    <img class="home-img-circle user-img" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị">
                    <div>
                        <h2>user name</h2>
                        <h3>email@gmail.com</h3>
                    </div>
                <!-- </div> -->
            </div>
        </header>
        <div class="home-bar">
            <div class="home-bar-menu ">
                <ul class="flex-column">
                    <li class="menu-item flex-row"><i class="icon-white icon-home fa-solid fa-house"></i> <span class="menu-text">Trang chủ</span></li>
                    <li class="menu-item flex-row"><i class="icon-white icon-home fa-regular fa-folder-open"></i> <span class="menu-text">Trang chủ</span></li>
                    <li class="menu-item flex-row"><i class="icon-white icon-home fa-solid fa-bell"></i> <span class="menu-text">Trang chủ</span></li>
                    <li class="menu-item flex-row"></li>
                    <li class="menu-item flex-row"><i class="icon-white icon-home fa-solid fa-layer-group"></i> <span class="menu-text">Trang chủ</span></li>
                    <li class="menu-item flex-row"><i class="icon-white icon-home fa-brands fa-youtube"></i> <span class="menu-text">Trang chủ</span></li>
                </ul>
            </div>
        </div>
        <!-- =========================================================== -->


        <div class="learn-container">
            <div class="flex-row">
                <div class="learn-card" >
                    <p>Lorem ipsum dolor sit, 
                        amet consectetur adipisicing elit. Ullam, recusandae! 
                        Esse veritatis deleniti asperiores, quaerat assumenda 
                        nihil perferendis possimus corrupti nam voluptatem! 
                        Laudantium cum, rem ad corrupti veniam cumque doloribus?</p>
                </div>
                <button>Next</button>
            </div>
        </div>









        <!-- ======================================================== -->
        

    </div>
</body>
</html>