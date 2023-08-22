document.addEventListener("DOMContentLoaded", function () {
    const questionIcons = document.querySelectorAll(".question-icon");
    const questions = document.querySelectorAll(".question");

    questionIcons.forEach((icon, index) => {
        icon.addEventListener("click", () => {
            questions.forEach((question) => {
                question.style.display = "none";
            });

            questions[index].style.display = "block";
        });
    });
});
