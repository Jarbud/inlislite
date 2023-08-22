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

document
    .getElementById("copyCodeButton")
    .addEventListener("click", function () {
        var randomCode = document.querySelector(".modal-body p");
        var codeText = randomCode.textContent;

        var tempInput = document.createElement("input");
        tempInput.value = codeText;
        document.body.appendChild(tempInput);

        tempInput.select();

        document.execCommand("copy");

        document.body.removeChild(tempInput);

        alert("Kode berhasil disalin: " + codeText);
    });
