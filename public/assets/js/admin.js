function updateFileName() {
    const input = document.getElementById("imageInput");
    const selectedFileName = document.getElementById("selectedFileName");
    const imagePreview = document.getElementById("previewImage");

    if (input.files.length > 0) {
        const fileName = input.files[0].name;
        selectedFileName.value = fileName;

        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);

        const box = document.querySelector("#imagePreview .box");
        if (box) {
            box.style.height = imagePreview.offsetHeight + "px";
        }
    } else {
        selectedFileName.value = "";
        imagePreview.src = "";
    }
}

const popupContainer = document.getElementById("popupContainer");
const openPopupButton = document.getElementById("popupOpen");
const closePopupButton = document.getElementById("popupClose");
const body = document.body;

function openPopup() {
    popupContainer.style.opacity = "1";
    popupContainer.style.display = "block";
    body.classList.add("popup-open");
}

function closePopup() {
    popupContainer.style.opacity = "0";
    setTimeout(() => {
        popupContainer.style.display = "none";
    }, 300);
    body.classList.remove("popup-open");
}

openPopupButton.addEventListener("click", openPopup);
closePopupButton.addEventListener("click", closePopup);
popupContainer.addEventListener("click", (e) => {
    if (e.target === popupContainer) {
        closePopup();
    }
});

function duplicateInput(button) {
    var originalDiv = button.parentNode;
    var clonedDiv = originalDiv.cloneNode(true);

    // Reset the input value in the cloned element
    var inputField = clonedDiv.querySelector("input");
    inputField.value = "";

    // Replace plus button with remove button in the cloned element
    clonedDiv.querySelector("#plus-pengarang").style.display = "none";
    clonedDiv.querySelector("#hapus-pengarang").style.display = "inline-block";

    // Append the cloned element to the parent container
    originalDiv.parentNode.appendChild(clonedDiv);
}

function removeInput(button) {
    var divToRemove = button.parentNode;
    divToRemove.parentNode.removeChild(divToRemove);
}
