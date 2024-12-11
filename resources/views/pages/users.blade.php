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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
    <title>Create FlashCard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />
</head>
<body style="background-color: #111347;">
    @include('pages.homes') 

    <div class="user-container flex-row">
                <!-- <div class=""> -->
                <!-- <img class="user-img--user" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị"> -->
                <form action="/users/updateImg" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($user && $user->hinhanh)
                    <img class="home-img-circle user-img" src="{{ asset('path/to/images/' . $user->hinhanh) }}" alt="Ảnh không hiển thị">
                    @else
                        <img class="home-img-circle user-img" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị">
                    @endif
                    <input type="file" name="profile_image" accept="image/*">
                    <button type="submit">Upload Image</button>
                </form>


                <form action="/users/updateUser"  method="POST" enctype="multipart/form-data">
                    
                    @if($user)
                    <h2><input type="text" name="name" value="{{ $user->tennd }}" placeholder="Tên người dùng"></h2>
                    <h3>{{ $user->email }}</h3>
                    <input type="password" name="current_password" placeholder="Nhập lại mật khẩu cũ">
                    <input type="password" name="new_password" placeholder="Nhập mật khẩu mới nếu không bỏ trống">
            
                    @else
                        <h2>Tên người dùng không có sẵn</h2>
                         <h3>Email người dùng không có sẵn</h3>

                     @endif
                     <button type="submit">chỉnh sửa</button>
                    </form>
                <!-- </div> -->
                 
            </div>
    
</body>
</html>