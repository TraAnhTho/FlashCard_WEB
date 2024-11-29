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
    <title>Trang chủ FlashCard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />

</head>
<body style="background-color: #f6f7fb;">
    <div>
        <!-- HEADER -->
         <header class="header">
         <div class="">
              <!-- Dây đỏ và hình ảnh 1 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-1.gif);"></div>
              </div>
              <!-- Dây đỏ và hình ảnh 2 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-2.gif);"></div>
              </div>
              <!-- Dây đỏ và hình ảnh 3 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-3.gif);"></div>
              </div>
              <!-- Dây đỏ và hình ảnh 4 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-4.gif);"></div>
              </div>
              <!-- Dây đỏ và hình ảnh 5 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-5.gif);"></div>
              </div>
              <!-- Dây đỏ và hình ảnh 6 -->
              <div class="circle-wire">
                  <div class="circle-image" style="background-image: url(../imgs/circle-image-6.gif);"></div>
              </div>
          </div>
          <!-- ------------------ -->
            <div class="nav-container container-fluid flex-row">
                <div class="logo-item">
                    <img class="logo-item" src="{{ asset('imgs/logoflashcard_blue.png') }}" alt="">
                </div>
                <ul class="nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Công cụ học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Chủ đề</a>
                    </li>
                    <li class="nav-item search-item" style="width: 40%;">
                        <input class="" type="text"  placeholder="🔎︎ Tìm kiếm câu hỏi" />
                    </li>
                    <li class="nav-item" >
                        <button class="" style="border: 0; background-color: white; color: #4255ff;"> <i class="icon-main fa-solid fa-plus"></i> Tạo</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="window.location.href='{{  url('/login')}}'">Đăng Nhập</button>
                    </li>
                </ul>
            </div>
            <div class="title-contain container">
                <h1>Bạn muốn học như thế nào? </h1>
                <p>Nắm vững kiến thức đang học với thẻ ghi nhớ tương tác, bài kiểm tra thử và hoạt động học tập của Flashcard.</p>
                <button class="" onclick="window.location.href='{{  url('/register')}}'">Đăng Kí Miễn Phí</button>
                <br>
                <span>Đã có tài khoản <a href="{{ url('/login') }}">Đăng nhập</a></span>
            </div>
         </header>

         <!-- -------------UNDER HEADER--------------- -->
      <div class="under-header">
        <div class="gird">
          <div class="under-header--border">
            <p>
              Có hơn 60% dân số trên thế giới có nhu cầu học tập và ghi nhớ kiến thức một cách hiệu quả đang ngày càng 
              trở nên quan trọng trong mọi lĩnh vực, từ học thuật đến công việc.
            </p>
            <div class="header__icon">
              <i class="icon--code fa-solid fa-language"></i>
              <i class="icon--code fa-solid fa-scale-balanced"></i>
              <i class="icon--code fa-solid fa-calculator"></i>
              <i class="icon--code fa-solid fa-book-atlas"></i>
              <i class="icon--code fa-solid fa-dna"></i>
              <i class="icon--code fa-solid fa-file-word"></i>
              <i class="icon--code fa-solid fa-flask-vial"></i>
              <i class="icon--code fa-solid fa-file-code"></i>
            </div>
          </div>
        </div>
      </div>

          <!-- MAIN -->
           <div class="container-fluid main-content">
            <div class="container-fluid content-part--one">
                <!-- Carousel -->
                <!-- <div id="demo" class="carousel slide" data-bs-ride="carousel"> -->

                <!-- Indicators/dots -->
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div> -->

                <!-- The slideshow/carousel -->
                <div class="caro-inner flex-row">
                <div class="caro-item" style="background-color: #98E3FF;"> <!-- active -->
                    <div class="card-item flex-column" >
                        <h3>Học</h3>
                        <img src="{{ asset('imgs/partone-0.jpg') }}" alt="Ảnh không tải được" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                <div class="caro-item" style="background-color: #423ED8;">
                <div class="card-item flex-column">
                        <h3>Thẻ Ghi Nhớ</h3>
                        <img src="{{ asset('imgs/partone-1.png') }}" alt="Ảnh không tải được" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                <div class="caro-item" style="background-color: #FFCD1F;">
                <div class="card-item flex-column">
                        <h3>Kiểm Tra</h3>
                        <img src="{{ asset('imgs/partone-2.avif') }}" alt="Ảnh không tải được" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                <div class="caro-item" style="background-color: #FDD2CA;">
                    <div class="card-item flex-column">
                        <h3>Ghép Thẻ</h3>
                        <img src="{{ asset('imgs/partone-3.avif') }}" alt="Ảnh không tải được" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                <div class="caro-item" style="background-color: #98F1D1;">
                    <div class="card-item flex-column">
                        <h3>Lời Giải Chuyên Gia</h3>
                        <img src="{{ asset('imgs/partone-4.avif') }}" alt="Ảnh không tải được" class="d-block img-card" style="width:100%">
                    </div>
                </div>
                </div>
                

                <!-- Left and right controls/icons -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
                </div> -->
            <!-- ---------- -->
            </div>

            <!-- -------------------- -->
             <div class="container-fluid container-part234 " >
              <!-- ---------PART TWO---------- -->
             <div class="container content-part--two flex-row">
              <div class="img-part">
                <img class="d-block" src="{{ asset('imgs/parttwo.avif') }}" alt="Ảnh không tải được">
              </div>
              <div class="text-part">
                <h3>Mọi lớp học, mọi bài thi, một ứng dụng học tập tối ưu. </h3>
                <p>Tạo thẻ ghi nhớ của riêng bạn hoặc tìm học phần do giáo viên, học sinh và chuyên gia tạo nên. Học mọi lúc, mọi nơi với ứng dụng miễn phí của chúng tôi.</p>
                <div class="app-promo__links">
                  <a href="#" class="app-link">
                      <img src="{{ asset('imgs/app-store.png') }}" alt="Tải về trên App Store" />
                  </a>
                  <a href="#" class="app-link">
                      <img src="{{ asset('imgs/gg-play.png') }}" alt="Tải nội dung trên Google Play" />
                  </a>
                </div>
              </div>
             </div>
             <!-- ---------PART THREE---------- -->
             <div class="container content-part--three flex-row">
             <div class="text-part">
                <h3>Chọn cách học mà bạn muốn. </h3>
                <p>Biến thẻ ghi nhớ thành câu hỏi trắc nghiệm và nhiều nội dung khác với chế độ Học. Củng cố kiến thức của bạn bằng các trò chơi học tập như Ghép thẻ.</p>
                <button onclick="window.location.href='{{  url('/register')}}'">Bắt đầu</button>
              </div>
              <div class="img-part">
                <img class="d-block" src="{{ asset('imgs/partthree.avif') }}" alt="Ảnh không tải được">
              </div>
             </div>
             <!-- ---------PART FOUR---------- -->
             <div class="container content-part--four flex-row">
              <div class="img-part">
                <img class="d-block" src="{{ asset('imgs/partfour.avif') }}" alt="Ảnh không tải được">
              </div>
              <div class="text-part">
                <h3>Chuẩn bị ôn thi cho bất kỳ môn học nào. </h3>
                <p>Ghi nhớ mọi thứ với các bài kiểm tra thử và phiên học được cá nhân hóa. 98% học sinh cho biết Flashcard đã giúp họ hiểu bài hơn.</p>
                <button onclick="window.location.href='{{  url('/register')}}'">Bắt đầu</button>
              </div>
             </div>
             <!-- -------------- -->
             </div>
            
             <!-- ------------- -->
              <div class="container-part5">
                <!-- ---------PART FIVE---------- -->
             <div class="container content-part--five flex-row">
             <div class="text-part">
                <h3>Truyền năng lượng cho học sinh. </h3>
                <p>Giúp mọi học viên tự tin học bất cứ điều gì. Với các học phần miễn phí, chế độ học và trò chơi trong lớp như Flashcard Live, bạn có thể ngay lập tức tạo ra một lớp học gắn kết hơn.</p>
                <button onclick="window.location.href='{{  url('/register')}}'">Đăng kí với tư cách thành viên</button>
              </div>
              <div class="img-part">
                <img class="d-block" src="{{ asset('imgs/partfive.avif') }}" alt="Ảnh không tải được">
              </div>
             </div>
             <!-- -------------------------- -->
              </div>
             

             <!-- -------------end main--------------- -->
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
              <p class="text" >
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