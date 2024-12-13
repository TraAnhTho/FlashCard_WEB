<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="quiz-container">
        <h1>Quiz</h1>
        <div id="question-container">
            <p id="flashcard-content">Loading...</p>
        </div>

        <button id="next-button">Next</button>
    </div>

    <script>
        let flashcards = [];
        let currentIndex = 0;
        let isShowingAnswer = false;

        // Lấy dữ liệu từ API
        fetch('/api/cards')
            .then(response => response.json())
            .then(data => {
                flashcards = data; // Lưu dữ liệu flashcards vào mảng
                loadFlashcard();
            })
            .catch(error => console.error('Error:', error));

        // Chuyển flashcard
        function loadFlashcard() {
            if (flashcards.length === 0) return;

            const card = flashcards[currentIndex];
            const flashcardContent = document.getElementById('flashcard-content');
            flashcardContent.innerText = isShowingAnswer ? card.thuatngu : card.dinhnghia;
        }

        // Cập nhật nút Next
        document.getElementById('next-button').addEventListener('click', () => {
            isShowingAnswer = !isShowingAnswer;

            if (!isShowingAnswer) {
                currentIndex = (currentIndex + 1) % flashcards.length;
            }

            loadFlashcard();
        });
    </script>
</body>
</html>
