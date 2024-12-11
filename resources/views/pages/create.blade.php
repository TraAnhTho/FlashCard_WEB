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
    <div>
        @include('pages.homes') 
<!-- ================================================================================================================================ -->
 <form action="/create/store" method="post">
     @csrf
     <div class="create-container container-fluid flex-column" >
            <div class="create_div flex-row">
                <h1>Tạo một học phần mới</h1>
                <div class="flex-row">
                    <button type="submit">Tạo</button>
                    <button >Tạo và học tập</button>
                </div>
            </div>
            <!-- ---------------- -->
             <div class="create_div flex-column">
                <input type="text" name="tittle_card" placeholder="Nhập tiêu đề, ví dụ &quot;Sinh học - Chương 22: Tiến hóa&quot;" maxlength="255" />
                <input type="text" name="mota_card" placeholder="Thêm mô tả..." maxlength="255" />
                <div class="create_div-item flex-row">
                    <div class="flex-row">
                        <button><i class="icon-white fa-solid fa-earth-americas"></i></button>
                        <button><i class="icon-white fa-solid fa-lock"></i></button>
                        <button><i class="icon-white fa-solid fa-gem"></i></button>
                    </div>
                    <div class="flex-row">
                        <button><i class="icon-white fa-solid fa-gear"></i></button>
                        <button><i class="icon-white fa-solid fa-star"></i></button>
                        <button><i class="icon-white fa-solid fa-keyboard"></i></button>
                </div>
                </div>
             </div>
             <!-- -------------------- -->
            <div class="flashcard-container">
                    <div id="flashcardsContainer">
                        <div class="flashcard-item">
                            <div class="header">
                                <h5>1</h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="flashcard-ipt flex-row">
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Thuật ngữ</label>
                                    <input type="text" name="flashcards[0][tn_card]" placeholder="Nhập thuật ngữ" />
                                </div>
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Định nghĩa</label>
                                    <input type="text" name="flashcards[0][dn_card]" placeholder="Nhập định nghĩa" />
                                </div>
                            </div>
                        </div>
                        <!-- Flashcards will be dynamically added here -->
                    </div>
                    
            </div>
                <!-- -------------------- -->



        <!-- --------------------- -->
        </div>

 </form>
                    <button class="btn btn-success mb-3 btn-create" id="addFlashcardBtn">
                        <i class="fa-solid fa-plus"></i> Thêm Flashcard
                    </button>
        


<!-- ================================================================================================================================ -->
    </div>
             @if ($errors->any())
                <div class="alert alert-danger" >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
</body>
</html>