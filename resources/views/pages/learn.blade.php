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
<body style="background-color: #111347;">
    <div>
        @include('pages.homes') 
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









    <!-- ============================================================================================ -->
    </div>
</body>
</html>