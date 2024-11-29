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
    <title>Flashcard Plus</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />
</head>
<body style="background-color: #111347;" >
  <div >
    <header class="header" >
        <div class="nav-container container-fluid" style="background-color: #0a092d;">
                <div class="logo-item">
                    <img class="logo-item" src="{{ asset('imgs/logoflashcar_white.png') }}" alt="">
                </div>
        </div>
    </header>
    <!-- ================= -->
    <div class="premium-container">
      <h1>Flashcard Plus</h1>
      <p class="subtitle"> <span class="highlight">Nêu</span> <span style="text-decoration: underline;">bật</span> nội <span class="highlight">dung</span> quan <span class="highlight"> trọng.</span></p>
      <h5>Flashcard Plus</h5>
      <div class="pricing">
        <div class="pricing-card">
          <div class="tag">Tiết kiệm nhất</div>
          <h3>Theo năm</h3>
          <p class="price">
            <strong>2,99 US$</strong>/tháng
          </p>
          <p>Thanh toán 35,99 US$ hàng năm.</p>
          <button>Bắt đầu dùng thử miễn phí 7 ngày</button>
        </div>
        <div class="pricing-card">
          <h3>Theo tháng</h3>
          <p class="price">
            <strong>7,99 US$</strong>/tháng
          </p>
          <p>Thanh toán định kỳ. Hủy bất kỳ lúc nào.</p>
          <button>Mua Flashcard Plus</button>
        </div>
      </div>
    </div>
    <!-- ====================== -->
    <div class="container-fluid">
    <!-- Phần thông tin về cách hoạt động -->
    <section class="how-it-works">
      <h2>Cách hoạt động của bạn dùng thử miễn phí Flashcard Plus*</h2>
      <p>*Gói dịch vụ hàng tháng không có dùng thử miễn phí</p>
      <div class="steps">
        <div class="step">
          <span class="icon">🔒</span>
          <h3>Hôm nay: Truy cập tức thì</h3>
          <p>Nhận 7 ngày dùng thử miễn phí Flashcard Plus khi bạn đăng ký sử dụng một gói dịch vụ hàng năm.</p>
        </div>
        <div class="step">
          <span class="icon">🔔</span>
          <h3>3 tháng 12: Lời nhắc</h3>
          <p>Bạn sẽ nhận được một email. Hủy bất cứ lúc nào trước ngày gia hạn để tránh bị tính phí.</p>
        </div>
        <div class="step">
          <span class="icon">💲</span>
          <h3>6 tháng 12: Tự động gia hạn</h3>
          <p>Dịch vụ sẽ tự động tính phí cho một năm tiếp theo trừ khi bạn hủy trước.</p>
        </div>
      </div>
    </section>

    <!-- Phần thông tin về gói Flashcard Plus -->
    <section class="pricing flex-column">
      <h1>Flashcard Plus</h1>
      <ul>
        <li><i class="fa-solid fa-check"></i> Toàn quyền truy cập vào chế độ Học</li>
        <li><i class="fa-solid fa-check"></i> Công cụ sáng tạo nâng cao</li>
        <li><i class="fa-solid fa-check"></i> Loại bỏ 100% quảng cáo khi học</li>
        <li><i class="fa-solid fa-check"></i> Lời giải từng bước cho sách giáo khoa*</li>
        <li><i class="fa-solid fa-check"></i> Toàn quyền truy cập vào thư viện Hỏi đáp</li>
        <li><i class="fa-solid fa-check"></i> Trò chơi và hoạt động học tập</li>
      </ul>
      <div class="pricing">
        <div class="pricing-card">
          <div class="tag">Tiết kiệm nhất</div>
          <h3>Theo năm</h3>
          <p class="price">
            <strong>2,99 US$</strong>/tháng
          </p>
          <p>Thanh toán 35,99 US$ hàng năm.</p>
          <button>Bắt đầu dùng thử miễn phí 7 ngày</button>
        </div>
        <div class="pricing-card">
          <h3>Theo tháng</h3>
          <p class="price">
            <strong>7,99 US$</strong>/tháng
          </p>
          <p>Thanh toán định kỳ. Hủy bất kỳ lúc nào.</p>
          <button>Mua Flashcard Plus</button>
        </div>
      </div>
      
    </section>
  </div>
  <!-- ======================== -->
  </div>
</body>
</html>
