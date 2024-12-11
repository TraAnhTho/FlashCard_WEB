// SỰ KIỆN NÚT MENU
document.addEventListener("DOMContentLoaded", () => {
    const barItem = document.querySelector(".bar-item");
    const homeBar = document.querySelector(".home-bar");
    const menuText = document.querySelectorAll(".menu-text"); // Chọn tất cả .menu-text
    const homeBarMenu = document.querySelector(".home-bar-menu");

    let isExpanded = false; // Biến trạng thái toggle

    barItem.addEventListener("click", () => {
        if (isExpanded) {
            homeBar.style.width = "6%";
            menuText.forEach((menuText) => {
                menuText.style.display = "none";
            });
            homeBarMenu.style.marginTop = "120%";
            console.log("Menu item được click!");
        } else {
            homeBar.style.width = "22%";
            menuText.forEach((menuText) => {
                menuText.style.display = "block";
            });
            homeBarMenu.style.marginTop = "30%";
            console.log("Menu item được click!");
        }
        isExpanded = !isExpanded; // Đảo trạng thái
    });
});
//SỬ KIỆN USER
document.addEventListener("DOMContentLoaded", () => {
    const userItem = document.querySelector(".user-item");
    const userProfile = document.querySelector(".user-profile");

    let isExpanded = false; // Biến trạng thái toggle

    userItem.addEventListener("click", () => {
        if (isExpanded) {
            userProfile.style.display = "none";
            console.log("userItem được click!");
        } else {
            userProfile.style.display = "flex";
            console.log("userItem được click!");
        }
        isExpanded = !isExpanded; // Đảo trạng thái
    });
});

// //SỰ KIỆN CREATE FLASHCARD
document.addEventListener("DOMContentLoaded", () => {
    const flashcardsContainer = document.getElementById("flashcardsContainer");
    const addFlashcardBtn = document.getElementById("addFlashcardBtn");
    let flashcardCount = 2;

    function addFlashcard() {
        const flashcardItem = document.createElement("div");
        flashcardItem.classList.add("flashcard-item");

        flashcardItem.innerHTML = `
            <div class="flashcard-item">
                            <div class="header">
                                <h5>${flashcardCount}</h5>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="flashcard-ipt flex-row">
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Thuật ngữ</label>
                                    <input type="text" name="flashcards[${
                                        flashcardCount - 1
                                    }][tn_card]" placeholder="Nhập thuật ngữ" />
                                </div>
                                <div class="flashcard-ipt-item flex-column">
                                    <label>Định nghĩa</label>
                                    <input type="text" name="flashcards[${
                                        flashcardCount - 1
                                    }][dn_card]" placeholder="Nhập định nghĩa" />
                                </div>
                            </div>
                        </div>
        `;

        // Thêm phần tử flashcard vào container
        flashcardsContainer.appendChild(flashcardItem);

        // Tăng số đếm flashcard cho lần sau
        flashcardCount++;
    }

    // Đăng ký sự kiện khi nhấn vào nút
    addFlashcardBtn.addEventListener("click", addFlashcard);
});
