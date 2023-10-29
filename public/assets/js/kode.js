function toggleCheckbox() {
    var inputNo = document.getElementById("nomor").value;
    var inputNama = document.getElementById("Nama").value;
    var inputEmail = document.getElementById("inputEmail").value;
    var inputTtl = document.getElementById("Tempat").value;
    var txtAlamatRumah = document.getElementById("txtAlamat").value;
    var txtAlamatSaatIni = document.getElementById("Alamat").value;

    var checkbox = document.querySelector(".custom-control-input");
    var submitButton = document.getElementById("idBtnSub");

    if (
        inputNo !== "" &&
        inputNama !== "" &&
        inputEmail !== "" &&
        inputTtl !== "" &&
        txtAlamatRumah !== "" &&
        txtAlamatSaatIni !== ""
    ) {
        checkbox.disabled = false;
    } else {
        checkbox.disabled = true;
        submitButton.style.visibility = "hidden";
    }
}

function showButton() {
    var checkbox = document.querySelector(".custom-control-input");
    var submitButton = document.getElementById("idBtnSub");

    if (checkbox.checked) {
        submitButton.style.visibility = "visible";
    } else {
        submitButton.style.visibility = "hidden";
    }
}

function checkAll(ele) {
    var checkboxes = document.getElementsByTagName("input");
    if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == "checkbox") {
                checkboxes[i].checked = true;
            }
        }
    } else {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == "checkbox") {
                checkboxes[i].checked = false;
            }
        }
    }
}

/* const barcodeInput = document.getElementById("codeunik");
barcodeInput.addEventListener("input", function (event) {
    const scannedText = event.target.value;
    barcodeInput.value = scannedText;
}); */

document.addEventListener("DOMContentLoaded", function () {
    const lokasiPerpustakaan = document.getElementById("lokasiPerpustakaan");
    const lokasiBaca = document.getElementById("lokasiBaca");
    const lanjutkanButton = document.getElementById("lanjutkanButton");

    lokasiPerpustakaan.addEventListener("change", validateForm);
    lokasiBaca.addEventListener("change", validateForm);

    function validateForm() {
        const selectedPerpustakaan = lokasiPerpustakaan.value;
        const selectedBaca = lokasiBaca.value;

        if (selectedPerpustakaan && selectedBaca) {
            lanjutkanButton.removeAttribute("disabled");
        } else {
            lanjutkanButton.setAttribute("disabled", "true");
        }
    }
});
