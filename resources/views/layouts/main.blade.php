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
