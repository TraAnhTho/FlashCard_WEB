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
    <title>Learn FlashCard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/logo.ico') }}" />
</head>
<body style="background-color: #111347;  color: white;">
    <div>
        @include('pages.homes') 
        <!-- =========================================================== -->


        <div class="folder-container">
            <div class="flex-row">
                <div class="folder-card" >
                    <div class="container mt-4">
                        <h1 style="color: white;" class="text-center">Danh Sách Bộ Card Của Bạn</h1>
                        @if ($bocards->isEmpty())
                            <p class="text-center">Bạn chưa có bộ card nào. <a href="{{ route('create')}}">Tạo mới</a></p>
                        @else
                            <ul class="list-group mt-4">
                                @foreach ($bocards as $bocard)
                                <li class="list-group-item fol-item">
                                    <i class="icon-white fa-solid fa-folder"></i>
                                    <h2><a href="{{ route('editcard', ['malist' => $bocard->malist]) }}">
                                        {{ $bocard->tenlist }}
                                    </a></h2>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>









    <!-- ============================================================================================ -->
    </div>
</body>
</html>