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

document.getElementById("myForm").addEventListener("keydown", function (event) {
    if (
        event.key === "Enter" &&
        !event.target.tagName.toLowerCase() === "textarea"
    ) {
        event.preventDefault();
    }
});

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

document.getElementById("checkButton").addEventListener("click", function () {
    var nim = document.getElementById("NoPengunjung").value;

    fetch(`/get?NoPengunjung=${nim}`)
        .then((response) => response.json())
        .then((data) => {
            if (data) {
                document.getElementById("Fullname").textContent = data.Fullname;
                document.getElementById("mahasiswaData").style.display =
                    "block";
            } else {
                alert("NIM tidak ditemukan.");
            }
        });
});

document.getElementById("simpanButton").addEventListener("click", function () {
    document.getElementById("NoPengunjung").value = "";
    document.getElementById("mahasiswaData").style.display = "none";
});

Quagga.init({
    inputStream: {
        name: "Live",
        type: "LiveStream",
        target: document.querySelector("#NoPengunjung"),
    },
    decoder: {
        readers: ["code_128_reader"],
    },
});

Quagga.start();

Quagga.onDetected((result) => {
    const nim = result.codeResult.code;
    document.getElementById("NoPengunjung").value = nim;
});
