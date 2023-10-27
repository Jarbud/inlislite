/*ENTRI KATALOG*/

/* COVER*/
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

function flashFileName() {
    var filesInput = document.getElementById("files");
    var namaFlashInput = document.getElementById("namaflash");

    if (filesInput.files.length > 0) {
        // Jika pengguna memilih berkas, ambil nama berkas pertama
        var fileName = filesInput.files[0].name;
        namaFlashInput.value = fileName;
    } else {
        // Jika tidak ada berkas yang dipilih, kosongkan input namaFlash
        namaFlashInput.value = "";
    }
}

function unggahBerkas() {
    var filesInput = document.getElementById("files");
    var namaFlashInput = document.getElementById("namaflash");

    if (filesInput.files.length > 0) {
        var formData = new FormData();
        for (var i = 0; i < filesInput.files.length; i++) {
            formData.append("files[]", filesInput.files[i]);
        }
        formData.append("namaFlash", namaFlashInput.value);

        fetch("{{ route('upload.file') }}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-Token": "{{ csrf_token() }}", // Token CSRF
            },
        })
            .then((response) => response.json())
            .then((data) => {
                // Handle respons dari server jika diperlukan
                console.log(data);
            })
            .catch((error) => {
                // Handle kesalahan jika ada
                console.error("Error:", error);
            });
    } else {
        alert("Pilih berkas terlebih dahulu.");
    }
}

/*KOLEKSI*/
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

/*KATALOG*/
//Pengarang Tambahan
function duplicatePengarang(button) {
    var originalPengarang = button.parentNode;
    var clonedPengarang = originalPengarang.cloneNode(true);

    var inputPengarang = clonedPengarang.querySelector("input");
    inputPengarang.value = "";

    clonedPengarang.querySelector("#plus-pengarang").style.display = "none";
    clonedPengarang.querySelector("#hapus-pengarang").style.display =
        "inline-block";

    originalPengarang.parentNode.appendChild(clonedPengarang);
}

function removePengarang(button) {
    var pengarangToRemove = button.parentNode;
    pengarangToRemove.parentNode.removeChild(pengarangToRemove);
}

//Subjek
function duplicateSubjek(button) {
    var originalSubjek = button.parentNode;
    var clonedSubjek = originalSubjek.cloneNode(true);

    var inputSubjek = clonedSubjek.querySelector("input");
    inputSubjek.value = "";

    clonedSubjek.querySelector("#plus-subjek").style.display = "none";
    clonedSubjek.querySelector("#hapus-subjek").style.display = "inline-block";

    originalSubjek.parentNode.appendChild(clonedSubjek);
}

function removeSubjek(button) {
    var subjekToRemove = button.parentNode;
    subjekToRemove.parentNode.removeChild(subjekToRemove);
}

//No Panggil
function duplicateNoPanggil(button) {
    var originalNoPanggil = button.parentNode;
    var clonedNoPanggil = originalNoPanggil.cloneNode(true);

    var inputNoPanggil = clonedNoPanggil.querySelector("input");
    inputNoPanggil.value = "";

    clonedNoPanggil.querySelector("#plus-noPanggil").style.display = "none";
    clonedNoPanggil.querySelector("#hapus-noPanggil").style.display =
        "inline-block";

    originalNoPanggil.parentNode.appendChild(clonedNoPanggil);
}

function removeNoPanggil(button) {
    var noPanggilToRemove = button.parentNode;
    noPanggilToRemove.parentNode.removeChild(noPanggilToRemove);
}

//ISBN
function duplicateISBN(button) {
    var originalISBN = button.parentNode;
    var clonedISBN = originalISBN.cloneNode(true);

    var inputISBN = clonedISBN.querySelector("input");
    inputISBN.value = "";

    clonedISBN.querySelector("#plus-ISBN").style.display = "none";
    clonedISBN.querySelector("#hapus-ISBN").style.display = "inline-block";

    originalISBN.parentNode.appendChild(clonedISBN);
}

function removeISBN(button) {
    var isbnToRemove = button.parentNode;
    isbnToRemove.parentNode.removeChild(isbnToRemove);
}

//Catatan
function duplicateCatatan(button) {
    var originalCatatan = button.parentNode;
    var clonedCatatan = originalCatatan.cloneNode(true);

    var inputCatatan = clonedCatatan.querySelector("textarea");
    inputCatatan.value = "";

    clonedCatatan.querySelector("#plus-catatan").style.display = "none";
    clonedCatatan.querySelector("#hapus-catatan").style.display =
        "inline-block";

    originalCatatan.parentNode.appendChild(clonedCatatan);
}

function removeCatatan(button) {
    var catatanToRemove = button.parentNode;
    catatanToRemove.parentNode.removeChild(catatanToRemove);
}

//Lokasi Daring
function duplicateLokDaring(button) {
    var originalLokDaring = button.parentNode;
    var clonedLokDaring = originalLokDaring.cloneNode(true);

    var inputLokDaring = clonedLokDaring.querySelector("select");
    inputLokDaring.value = "";

    clonedLokDaring.querySelector("#plus-lokasikol_daring").style.display =
        "none";
    clonedLokDaring.querySelector("#hapus-lokasikol_daring").style.display =
        "inline-block";

    originalLokDaring.parentNode.appendChild(clonedLokDaring);
}

function removeLokDaring(button) {
    var daringToRemove = button.parentNode;
    daringToRemove.parentNode.removeChild(daringToRemove);
}

//Eksemplar
function duplicateEksemplar() {
    var jEksemplarInput = document.getElementById("jEksemplar");
    var jumlahEksemplar = parseInt(jEksemplarInput.value);

    if (!isNaN(jumlahEksemplar) && jumlahEksemplar > 0) {
        var containerEksemplar = document.getElementById("isi-si1");

        while (containerEksemplar.firstChild) {
            containerEksemplar.removeChild(containerEksemplar.firstChild);
        }

        for (var i = 0; i < jumlahEksemplar; i++) {
            var eksemplarDiv = document.createElement("div");

            var labelNoInduk = document.createElement("label");
            labelNoInduk.innerHTML =
                "No Induk/Barcode/RFID <input type='text' name='noInduk"+i+"' id='noInduk'>";
            eksemplarDiv.appendChild(labelNoInduk);

            // var labelNoBarcode = document.createElement("label");
            // labelNoBarcode.innerHTML =
            //     "No Barcode <input type='text' name='noBarcode' id='noBarcode'>";
            // eksemplarDiv.appendChild(labelNoBarcode);

            // var labelNoRFID = document.createElement("label");
            // labelNoRFID.innerHTML =
            //     "No RFID <input type='text' name='noRFID' id='noRFID'>";
            // eksemplarDiv.appendChild(labelNoRFID);

            containerEksemplar.appendChild(eksemplarDiv);
        }
    } else {
        alert("Masukkan jumlah eksemplar yang valid.");
    }
}

// Mendapatkan semua elemen <li>
const menu = document.querySelectorAll("li");

// Menambahkan event listener pada setiap elemen <li>
menu.forEach((menu) => {
    menu.addEventListener("click", function () {
        const target = this.getAttribute("data-target");

        document.querySelectorAll(".bagian").forEach((bagian) => {
            bagian.style.display = "none";
        });

        document.querySelector(target).style.display = "block";
    });
});
