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
