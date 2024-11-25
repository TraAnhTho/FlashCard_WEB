<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Font Awesome -->
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>FlashCard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />

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
                <div class="carousel-inner flex-row">
                <div class="caro-item active">
                    <div class="card-item flex-column">
                        <h3>Los Angeles</h3>
                        <img src="la.jpg" alt="Los Angeles" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                <div class="caro-item">
                    <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
                </div>
                <div class="caro-item">
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


         <!-- FOOTER -->
         <footer id="footer">
        <div class="footer--background container">
          <div class="gird d-flex flex-column footerbox">
            <div class="footer_box footer_box--1 d-flex flex-row">
              <div class="footer_box--1--content">
                <span class=""
                  ><img class="logo" src="/assets/img/magiccode.png" alt=""
                /></span>
                <p class="fontw">
                  Chúng tôi không ở đây để bán cho bạn

                  <br />
                  sản phẩm, chúng tôi bán giá trị thông qua<br />
                  chuyên môn của chúng tôi.
                </p>
                <div class="footer_icon flex-row">
                  <i class="icon_main icon_space fa-brands fa-facebook"></i
                  ><i
                    class="icon_main icon_space fa-brands fa-square-twitter"
                  ></i
                  ><i class="icon_main icon_space fa-brands fa-instagram"></i
                  ><i class="icon_main icon_space fa-brands fa-linkedin-in"></i>
                </div>
              </div>
              <div class="footer_box--1--content"></div>
              <div class="footer_box--1--content">
                <p class="fontw">
                  <b>Địa Chỉ:</b> <br />470 Đường Trần Đại Nghĩa, Ngũ
                  Hành Sơn, Đà Nẵng.
                </p>
                <p class="fontw"><b>Phone:</b><br />(84+)093472686999</p>
                <p class="fontw"><b>Email:</b> <br />flashcard@company.com</p>
              </div>
              <div class="footer_box--1--content">
                <p class="fontw">
                  <b>Công Ty:</b> <br />Liên Hệ <br />Tính Năng <br />Giá Cả
                </p>

                <p></p>
              </div>
            </div>
            <div
              class="footer_box footer_box--2 gird--center gird--center--column"
            >
              <p class="text" style="color: white">
                Đăng ký để nhận thông tin cập nhật mới nhất.
              </p>
              <div class="email_button gird gird--center gird--center--row">
                <input
                  type="text"
                  value=""
                  placeholder="Nhập Địa Chỉ Email Của Bạn"
                  style="color: rgb(219, 112, 147); width: 50%"
                />
                <button
                  style="
                    background-color: rgb(219, 112, 147);
                    color: --color_white;
                    border: 0;
                    width: 20%;
                  "
                >
                  Đăng Kí
                </button>
              </div>
            </div>
            <div class="footer_box footer_box--3">
              <p class="fontw">
                Được Hỗ Trợ Bởi
                <span style="color: rgb(219, 112, 147)"> &copy; TraAnhTho</span>
                &nbsp;
              </p>
            </div>
          </div>
        </div>
      </footer>

    </div>




    <!-- <div class="box">

    </div> -->
</body>
</html>