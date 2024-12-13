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
                    <li class="home-nav-item search-item" >
                        <input type="text"  placeholder=" 🔎︎ Tìm kiếm câu hỏi" />
                    </li>
                    <li class="home-nav-item" >
                        <button class="" ><a href="{{  url('/create')}}"><i class="icon-white fa-solid fa-plus"></i></a> </button>
                    </li>
                    <li class="home-nav-item">
                        <button class="or" ><div><a href="{{  url('/premium')}}" target="_blank" style="color: black;" rel="noopener noreferrer">Nâng cấp: dùng thử 7 ngày</a></div></button>
                    </li>
                    <li class="home-nav-item user-item" role="button" tabindex="0">
                        <img class="home-img-circle" src="{{ Storage::url($user->hinhanh) }}" alt="Ảnh không hiển thị">
                    </li>
                </ul>
            </div>
            <div style="z-index: 12;" class="user-profile flex-row">
                <!-- <div class=""> -->
                @if($user && $user->hinhanh)
                    <img class="home-img-circle user-img" src="{{ Storage::url($user->hinhanh) }}" alt="Ảnh không hiển thị">
                    @else
                        <img class="home-img-circle user-img" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị">
                    @endif
                <!-- @if($user && $user->hinhanh)
                    <img class="home-img-circle user-img" src="{{ asset('path/to/images/' . $user->hinhanh) }}" alt="Ảnh không hiển thị">
                @else
                    <img class="home-img-circle user-img" src="{{ asset('imgs/user.jpg') }}" alt="Ảnh không hiển thị">
                @endif -->
                    <div>
                    
                    @if($user)
                        <h2>{{ $user->tennd }}</h2>
                        <h3>{{ $user->email }}</h3>
                    @else
                        <h2>Tên người dùng không có sẵn</h2>
                         <h3>Email người dùng không có sẵn</h3>
                     @endif
                    </div>
                <!-- </div> -->
            </div>
        </header>
        <div class="home-bar">
            <div class="home-bar-menu ">
                <ul class="flex-column">
                    <li class="menu-item flex-row"><a href="{{  url('/home')}}"><i class="icon-white icon-home fa-solid fa-house"></i> <span class="menu-text">Trang chủ</span></a></li>
                    <li class="menu-item flex-row"><a href="{{  url('/folder')}}"><i class="icon-white icon-home fa-regular fa-folder-open"></i> <span class="menu-text">Thư viện</span></a></li>
                    <li class="menu-item flex-row"><a href="{{  url('/blog')}}"><i class="icon-white icon-home fa-solid fa-bell"></i> <span class="menu-text">Bài viết</span></a></li>
                    <li class="menu-item flex-row"><a href="{{  url('/create')}}"><i class="icon-white icon-home fa-solid fa-layer-group"></i> <span class="menu-text">Thẻ ghi nhớ</span></a></li>
                    <li class="menu-item flex-row"><a href="{{  url('/premium')}}" target="_blank"><i class="icon-white icon-home fa-brands fa-youtube"></i> <span class="menu-text">Chuyên gia</span></a></li>
                    <li class="menu-item flex-row"><a href="{{  url('/users')}}"><i class="icon-white icon-home fa-solid fa-gear"></i><span class="menu-text">Cài đặt</span></a></li>

                </ul>
            </div>
        </div>
        @if (session('success'))
            <script>
                Swal.fire({
                    title: 'Thành công!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        

    </div>
    