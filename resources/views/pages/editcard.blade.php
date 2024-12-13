<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
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
<body style="background-color: #111347;  color: white;">
    <div>
        @include('pages.homes') 
<!-- ================================================================================================================================ -->
 <form action="{{ route('editcard.store', ['malist' => $bocard->malist]) }}" method="post">
     @csrf
     <div class="edit-container container-fluid flex-column" >
            <div class="edit_div flex-row">
                <h1 style="color: white;">Bộ card :  {{ $bocard->tenlist ?? 'Chưa có tên' }}</h1>
                <div class="flex-row">
                    <button type="submit">Lưu</button>
                    <button >Lưu và học tập</button>
                </div>
            </div>
            <!-- ---------------- -->
             <div class="edit_div flex-column">
                <input type="text" name="edit_tittle_card" value="{{ $bocard->tenlist ?? '' }}" maxlength="255" />
                <input type="text" name="edit_mota_card" value="{{ $bocard->mota ?? 'Thêm mô tả...' }} " maxlength="255" />
                <div class="edit_div-item flex-row">
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
                    <div>
                        @foreach($flashcards as $index => $card)
                        <div class="flashcard-item">
                            <div class="header flex-row justify-content-evenly">
                                <h5>{{$index + 1}}</h5>
                                <button style="width: 10%; margin: 2rem;" type="button" class="btn btn-danger delete-flashcard-btn" data-id="{{ $card->macard }}"> <i class="fa-solid fa-trash"></i> </button>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="flashcard-ipt flex-row">
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Thuật ngữ</label>
                                    <input type="text" name="flashcards[{{ $index }}][edit_tn_card]" value="{{ $card->thuatngu ?? '' }}" />
                                </div>
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Định nghĩa</label>
                                    <input type="text" name="flashcards[{{ $index }}][edit_dn_card]" value="{{ $card->dinhnghia ?? '' }}" />
                                </div>
                                <!-- Include the card's ID for reference -->
                                <input type="hidden" name="flashcards[{{ $index }}][id]" value="{{ $card->macard }}" />
    
                            </div>
                        </div>


                        @endforeach
                        <!-- Flashcards will be dynamically added here -->
                    </div>
                    
            </div>
                <!-- -------------------- -->



        <!-- --------------------- -->
        </div>

 </form>


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

    <script>
        // Đảm bảo rằng DOM đã được tải đầy đủ
    document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện click vào các nút xóa
    const deleteButtons = document.querySelectorAll('.delete-flashcard-btn');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const cardId = button.getAttribute('data-id');
            const confirmation = confirm('Bạn có chắc chắn muốn xóa flashcard này?');
            
            if (confirmation) {
                // Gửi yêu cầu AJAX để xóa flashcard
                fetch(`/editcard/flashcard/{{ $card->macard }}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF Token
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Xóa phần tử flashcard từ DOM
                        button.closest('.flashcard-item').remove();
                        alert(data.message);  // Hiển thị thông báo thành công
                    } else {
                        alert('Lỗi khi xóa flashcard. Vui lòng thử lại.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Lỗi xảy ra khi xóa flashcard.');
                });
            }
        });
    });
});

    </script>
</body>
</html>