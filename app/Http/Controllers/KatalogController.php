<?php

namespace App\Http\Controllers;

use App\Models\Branchs;
use App\Models\Catalog;
use App\Models\CatalogFile;
use App\Models\Collection;
use App\Models\CollectionCategories;
use App\Models\CollectionMedias;
use App\Models\CollectionRules;
use App\Models\CollectionSources;
use App\Models\CollectionStatus;
use App\Models\Currency;
use App\Models\kata_sandang;
use App\Models\LocationLibrary;
use App\Models\Locations;
use App\Models\RefferenceItems;
use App\Models\worksheets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use MongoDB\BSON\Binary;

class KatalogController extends Controller
{
    public function show1(Request $request)
    {
        $jenisBahan = worksheets::all();
        $kataSandang = kata_sandang::all();
        $refitems = RefferenceItems::where('Refference_id', '5')->get();
        $refkarya = RefferenceItems::where('Refference_id', '17')->get();
        $branch = Branchs::all();

        return view('admin/katalog/katalog1', compact('jenisBahan', 'kataSandang', 'refitems', 'refkarya', 'branch'));
    }

    public function show2()
    {
        $colsources = CollectionSources::all();
        $colmedias = CollectionMedias::all();
        $colrules = CollectionRules::all();
        $loclibrary = LocationLibrary::all();
        $location = Locations::all();
        $colstatus = CollectionStatus::all();
        $matauang = Currency::all();
        $kategori = CollectionCategories::all();

        return view('admin/katalog/koleksi1', compact(
            'colsources',
            'colmedias',
            'colrules',
            'loclibrary',
            'location',
            'colstatus',
            'matauang',
            'kategori',
        ));
    }

    public function show3()
    {
        return view('admin/katalog/cover1');
    }

    public function show4()
    {
        return view('admin/katalog/kontenDigital1');
    }

    public function store1(Request $request)
    {
        $judulUtama = $request->input('judul_utama');
        $anakJudul = $request->input('anak_judul');
        $penanggungJawab = $request->input('pjawab');
        $pengarangUtama = $request->input('pUtama');
        $pengarangTambahan = $request->input('pTambahan');
        $tempatTerbit = $request->input('tempatT');
        $Penerbit = $request->input('penerbit');
        $tahunTerbit = $request->input('tahunT');
        $jumlahHalaman = $request->input('jHalaman');
        $ketIlustrasi = $request->input('ilustrasi');
        $Dimensi = $request->input('dimensi');
        $bahanSertaan = $request->input('bahansertaan');
        $Edisi = $request->input('Edition');
        $Subjek = $request->input('Subject');
        $klasDDC = $request->input('DeweyNo');
        $noPanggil = $request->input('CallNumber');
        $Isbn = $request->input('ISBN');
        $Catatan = $request->input('Note');
        $catalogLanguage = $request->input('Languages');
        $catalogKarya = $request->input('karya');
        $catalogWorksheet = $request->input('jenis-bahan');
        $Branch_id = $request->input('lokasikol-daring');

        $title = "";
        if (!empty($judulUtama)) {
            $title .= $judulUtama;
        }
        if (!empty($anakJudul)) {
            if (!empty($judulUtama)) {
                $title .= ": ";
            }
            $title .= $anakJudul;
        }
        if (!empty($penanggungJawab)) {
            if (!empty($judulUtama) || !empty($anakJudul)) {
                $title .= ": ";
            }
            $title .= $penanggungJawab;
        }

        $author = "";
        if (!empty($pengarangUtama)) {
            $author .= $pengarangUtama;
        }
        if (!empty($pengarangTambahan)) {
            if (!empty($pengarangUtama)) {
                $author .= ":";
            }
            $author .= implode(':', $pengarangTambahan);
        }

        $publishlocation = "$tempatTerbit";
        $publisher = "$Penerbit";
        $publishyear = "$tahunTerbit";

        $publikasi = "";
        if (!empty($tempatTerbit)) {
            $publikasi .= $tempatTerbit;
        }
        if (!empty($Penerbit)) {
            if (!empty($tempatTerbit)) {
                $publikasi .= ":";
            }
            $publikasi .= $Penerbit;
        }
        if (!empty($tahunTerbit)) {
            if (!empty($Penerbit)) {
                $publikasi .= ":";
            }
            $publikasi .= $tahunTerbit;
        }

        $physicaldescription = "";
        if (!empty($jumlahHalaman)) {
            $physicaldescription .= $jumlahHalaman;
        }
        if (!empty($ketIlustrasi)) {
            if (!empty($jumlahHalaman)) {
                $physicaldescription .= ":";
            }
            $physicaldescription .= $ketIlustrasi;
        }
        if (!empty($Dimensi)) {
            if (!empty($ketIlustrasi)) {
                $physicaldescription .= ":";
            }
            $physicaldescription .= $Dimensi;
        }
        if (!empty($bahanSertaan)) {
            if (!empty($Dimensi)) {
                $physicaldescription .= ":";
            }
            $physicaldescription .= $bahanSertaan;
        }
        if ($physicaldescription === "") {
            $physicaldescription = null;
        }

        $edition = "";
        if (!empty($Edisi)) {
            $edition .= $Edisi;
        }
        if ($edition === "") {
            $edition = null;
        }

        $subject = "";
        if (!empty($Subjek)) {
            $subject .= implode(':', $Subjek);
        }
        if ($subject === "") {
            $subject = null;
        }

        $deweyno = "";
        if (!empty($klasDDC)) {
            $deweyno .= $klasDDC;
        }
        if ($deweyno === "") {
            $deweyno = null;
        }

        $callnumber = "";
        if (!empty($noPanggil)) {
            $callnumber .= implode(':', $noPanggil);
        }
        if ($callnumber === "") {
            $callnumber = null;
        }

        $isbn = "";
        if (!empty($Isbn)) {
            $isbn .= implode(':', $Isbn);
        }
        if ($isbn === "") {
            $isbn = null;
        }

        $note = "";
        if (!empty($Catatan)) {
            $note .= implode(':', $Catatan);
        }
        if ($note === "") {
            $note = null;
        }

        $count = Catalog::getQuery()->count();

        $tanggalTerkini = Carbon::now();
        $bulan = $tanggalTerkini->format('m');
        $tahun = substr($tanggalTerkini->format('Y'), -2);

        $catalogsId = $count + 1;
        $catalogsControl = 'INLIS' . str_pad($count + 1, 15, '0', STR_PAD_LEFT);
        $catalogsBIBID = '0010-' . $bulan . $tahun . str_pad($count + 1, 6, '0', STR_PAD_LEFT);

        $bahasa = explode(' - ', $catalogLanguage)[0];
        $karya = explode(' - ', $catalogKarya)[0];

        $branch_id = "";
        if (!empty($Branch_id)) {
            $branch_id .= implode(':', $Branch_id);
        }
        if ($branch_id === "") {
            $branch_id = null;
        }

        $catalog = new Catalog();
        $catalog->ID = $catalogsId;
        $catalog->ControlNumber = $catalogsControl;
        $catalog->BIBID = $catalogsBIBID;
        $catalog->Title = $title;
        $catalog->Author = $author;
        $catalog->Edition = $edition;
        $catalog->Publisher = $publisher;
        $catalog->PublishLocation = $publishlocation;
        $catalog->PublishYear = $publishyear;
        $catalog->Publikasi = $publikasi;
        $catalog->Subject = $subject;
        $catalog->PhysicalDescription = $physicaldescription;
        $catalog->ISBN = $isbn;
        $catalog->CallNumber = $callnumber;
        $catalog->Note = $note;
        $catalog->Languages = $bahasa;
        $catalog->DeweyNo = $deweyno;
        $catalog->IsRDA = $karya;
        $catalog->Worksheet_id = $catalogWorksheet;
        $catalog->Branch_id = $branch_id;

        if ($request->input('action') === 'save') {
            $this->saveSession($request, $catalog);
        }

        return redirect('katalog');
    }

    protected function saveSession(Request $request, Catalog $catalog)
    {
        $request->session()->put('CatalogId', $catalog->ID);
        $request->session()->put('CatalogControl', $catalog->ControlNumber);
        $request->session()->put('CatalogBIBID', $catalog->BIBID);
        $request->session()->put('CatalogTitle', $catalog->Title);
        $request->session()->put('CatalogAuthor', $catalog->Author);
        $request->session()->put('CatalogEdition', $catalog->Edition);
        $request->session()->put('CatalogPublisher', $catalog->Publisher);
        $request->session()->put('CatalogPublishlocation', $catalog->PublishLocation);
        $request->session()->put('CatalogPublishYear', $catalog->PublishYear);
        $request->session()->put('CatalogPublikasi', $catalog->Publikasi);
        $request->session()->put('CatalogSubject', $catalog->Subject);
        $request->session()->put('CatalogPhysicalDescription', $catalog->PhysicalDescription);
        $request->session()->put('CatalogIsbn', $catalog->ISBN);
        $request->session()->put('CatalogCallNumber', $catalog->CallNumber);
        $request->session()->put('CatalogNote', $catalog->Note);
        $request->session()->put('CatalogLanguages', $catalog->Languages);
        $request->session()->put('CatalogDeweyNo', $catalog->DeweyNo);
        $request->session()->put('CatalogKarya', $catalog->IsRDA);
        $request->session()->put('CatalogWorksheetId', $catalog->Worksheet_id);
        $request->session()->put('CatalogBranchId', $catalog->Branch_id);
    }

    protected function getSession(Request $request)
    {
        return [
            $catalogId = session('CatalogId'),
            $catalogControl = session('CatalogControl'),
            $catalogBIBID = session('CatalogBIBID'),
            $catalogTitle = session('CatalogTitle'),
            $catalogAuthor = session('CatalogAuthor'),
            $catalogEdition = session('CatalogEdition'),
            $catalogPublisher = session('CatalogPublisher'),
            $catalogPublishLocation = session('CatalogPublishLocation'),
            $catalogPublishYear = session('CatalogPublishYear'),
            $catalogPublikasi = session('CatalogPublikasi'),
            $catalogSubject = session('CatalogSubject'),
            $catalogPhysicalDescription = session('CatalogPhysicalDesciption'),
            $catalogIsbn = session('CatalogIsbn'),
            $catalogCallNumber = session('CatalogCallNumber'),
            $catalogNote = session('CatalogNote'),
            $catalogLanguages = session('CatalogLanguages'),
            $catalogDeweyNo = session('CatalogDeweyNo'),
            $catalogKarya = session('CatalogKarya'),
            $catalogWorksheetId = session('CatalogWorksheetId'),
            $catalogBranchId = session('CatalogBranchId'),
        ];
    }

    public function store2(Request $request)
    {
        $nomor_barcode = $request->input('noBarcode');
        $nomor_induk = $request->input('noInduk');
        $currency = $request->input('mataUang');
        $nomor_rfid = $request->input('noRFID');
        $price = $request->input('harga');
        $tanggal_pengadaan = $request->input('tglPengadaan');
        $nomor_panggil = $request->input('noPanggil');
        $lokasi_ruang = $request->input('lokRuang');
        $Akses = $request->input('akses');
        $Kategori = $request->input('kategori');
        $Ketersediaan = $request->input('ketersediaan');
        $Media = $request->input('btkFisik');
        $jSumber = $request->input('jnsSumber');


        $noBarcode = "";
        if (!empty($nomor_barcode)) {
            $noBarcode .= implode(':', $nomor_barcode);
        }

        $noInduk = "";
        if (!empty($nomor_induk)) {
            $noInduk .= implode(':', $nomor_induk);
        }

        $matauang = "";
        if (!empty($currency)) {
            $matauang .= $currency;
        }
        if ($matauang === "") {
            $matauang = null;
        }

        $norfid = "";
        if (!empty($nomor_rfid)) {
            $norfid .= implode(':', $nomor_rfid);
        }

        $harga = "";
        if (!empty($price)) {
            $harga .= $price;
        }
        if ($harga === "") {
            $harga = null;
        }

        $pengadaan = "";
        if (!empty($tanggal_pengadaan)) {
            $pengadaan .= $tanggal_pengadaan;
        }
        if ($pengadaan === "") {
            $pengadaan = null;
        }

        $Nopanggil = "";
        if (!empty($nomor_panggil)) {
            $Nopanggil .= $nomor_panggil;
        }
        if ($Nopanggil === "") {
            $Nopanggil = null;
        }

        $Namasumber = "";
        if (!empty($name_sumber)) {
            $Namasumber .= $name_sumber;
        }
        if ($Namasumber === "") {
            $Namasumber = null;
        }

        $ruang = "";
        if (!empty($lokasi_ruang)) {
            $ruang .= $lokasi_ruang;
        }
        if ($ruang === "") {
            $ruang = null;
        }

        $akses = "";
        if (!empty($Akses)) {
            $akses .= $Akses;
        }
        if ($akses === "") {
            $akses = null;
        }

        $kategori = "";
        if (!empty($Kategori)) {
            $kategori .= $Kategori;
        }
        if ($kategori === "") {
            $kategori = null;
        }

        $ketersediaan = "";
        if (!empty($Ketersediaan)) {
            $ketersediaan .= $Ketersediaan;
        }
        if ($ketersediaan === "") {
            $ketersediaan = null;
        }

        $bentuk = "";
        if (!empty($Media)) {
            $bentuk .= $Media;
        }
        if ($bentuk === "") {
            $bentuk = null;
        }

        $sumber = "";
        if (!empty($jSumber)) {
            $sumber .= $jSumber;
        }
        if ($sumber === "") {
            $sumber = null;
        }

        $lokasi = "";
        if (!empty($lokasiLibrary)) {
            $lokasi .= $lokasiLibrary;
        }
        if ($lokasi === "") {
            $lokasi = null;
        }

        $count = Collection::getQuery()->count();

        $collectionsId = $count + 1;

        $collection = new Collection();
        $collection->ID = $collectionsId;
        $collection->NomorBarcode = $noBarcode;
        $collection->NomorInduk = $noInduk;
        $collection->Currency = $matauang;
        $collection->RFID = $norfid;
        $collection->Price = $harga;
        $collection->TanggalPengadaan = $pengadaan;
        $collection->CallNumber = $Nopanggil;
        //$collection->Branch_id = $branch;
        //$collection->Catalog_id = $catalog;
        $collection->Partner_id = $Namasumber;
        $collection->Lokasi_id = $ruang;
        $collection->Rule_id = $akses;
        $collection->Category_id = $kategori;
        $collection->Media_id = $bentuk;
        $collection->Source_id = $sumber;
        $collection->Status_id = $ketersediaan;
        $collection->Location_Library_id = $lokasi;

        return redirect('koleksi');
    }

    public function upload3(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:1024',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $coverURL = new Binary(file_get_contents($image->getRealPath()), Binary::TYPE_GENERIC);

            $cover = new Catalog();
            $cover->CoverURL = $coverURL;
            $cover->save();

            return redirect()->route('upload.form')->with('success', 'Cover berhasil diunggah')->with('imageId', $cover->id);
        }

        return redirect()->route('upload.form')->withErrors(['image' => 'Tidak ada gambar yang diunggah.']);
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'files.*' => 'required|mimes:pdf|max:5120', // Max 5MB
            'namaFlash' => 'required',
        ]);

        $namaFlash = $request->input('namaFlash');

        foreach ($request->file('files') as $file) {
            $catalogFile = new CatalogFile([
                'FileURL' => $namaFlash,
                'FileFlash' => new Binary(file_get_contents($file->getRealPath()), Binary::TYPE_GENERIC)
            ]);

            $catalogFile->save();
        }

        return redirect()->back()->with('success', 'File PDF berhasil diunggah dan disimpan dalam koleksi "catalogfiles" di MongoDB.');
    }

    public function store(Request $request)
    {
        if ($request->input('action') === 'finish') {
            $catalogData = $this->getSession($request);

            $catalog = new Catalog($catalogData);
            $catalog->save();

            $request->session()->flush();
        }
    }
}
