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
        <h1 style="color: white;">Chào {{ $user->tennd }}, bắt đầu học flashcards từ bộ thẻ "{{ $bocard->tenlist }}"</h1>

            <div class="learn-card flex-row">
            
                <div class="">
                    <div class="card" style="align-items: center;">
                        <p style="height: 15rem; border: 0; margin: auto; align-items: center;font-size: 4rem;" id="flashcard-content">Loading...</p>
                        
                    </div>
                </div> 
            
            </div>
            <button class="btn btn-primary" id="btn-next">Bắt đầu</button>
            <button class="btn btn-danger" id="btn-exit">Exit</button>
           
    
    <!-- Hiển thị lỗi nếu không có flashcards -->
    @if ($flashcards->isEmpty())
        <div class="alert alert-warning">
            <strong>Chú ý!</strong> Bộ thẻ này chưa có flashcards.
        </div>
    @endif

    <!-- </div> -->


        









    <!-- ============================================================================================ -->
    </div>
    <!-- ========================================================================= -->
    <script>
    let flashcards = [];
    let currentIndex = 0; // Chỉ số flashcard hiện tại
    let isShowingAnswer = false; // Trạng thái hiển thị: false = câu hỏi, true = đáp án

    // Gọi API để lấy dữ liệu flashcard
    async function fetchFlashcards() {
        try {
            const response = await fetch(`/api/flashcards/{{ $bocard->malist }}`);
            const data = await response.json();

            if (response.ok) {
                flashcards = data;
                showFlashcard();
            } else {
                alert(data.error);
            }
        } catch (error) {
            console.error('Error fetching flashcards:', error);
            document.getElementById('flashcard-content').innerText = 'Không thể tải dữ liệu!';

        }
    }

    // Hiển thị câu hỏi hoặc đáp án
    function showFlashcard() {
        const flashcardContent = document.getElementById('flashcard-content');
        const nextButton = document.getElementById('btn-next');
        const exitButton = document.getElementById('btn-exit');


        // Nếu đã duyệt qua hết flashcards
        if (currentIndex >= flashcards.length) {
            flashcardContent.innerText = 'Bạn đã hoàn thành bài học!';
            exitButton.innerText = 'Hoàn thành';
            nextButton.disabled = true; // Vô hiệu hóa nút Next
            return;
        }

        // Lấy flashcard hiện tại
        const card = flashcards[currentIndex];
        flashcardContent.innerText = isShowingAnswer ? card.thuatngu : card.dinhnghia;
        nextButton.innerText = isShowingAnswer ? 'Next' : 'Hiển thị đáp án'; // Cập nhật nút
    }

    // Xử lý sự kiện khi bấm nút Next
    document.getElementById('btn-next').addEventListener('click', () => {
        if (isShowingAnswer) {
            // Nếu đang hiển thị đáp án, chuyển sang câu hỏi tiếp theo
            currentIndex++;
        }

        isShowingAnswer = !isShowingAnswer; // Đổi trạng thái hiển thị
        showFlashcard();
    });

    // Xử lý nút Exit
    document.getElementById('btn-exit').addEventListener('click', () => {
        if (confirm('Bạn có chắc muốn thoát bài học?')) {
            window.location.href = '/home';
        }
    });

    // Bắt đầu bài học
    fetchFlashcards();
 </script>

</body>
</html>