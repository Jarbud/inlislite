<?php

namespace App\Http\Controllers;

use App\Models\Branchs;
use App\Models\Catalog;
use App\Models\kata_sandang;
use App\Models\RefferenceItems;
use App\Models\worksheets;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EntriCatalogController extends Controller
{
    public function show(Request $request)
    {
        $jenisBahan = worksheets::all();
        $kataSandang = kata_sandang::all();
        $refitems = RefferenceItems::where('Refference_id', '5')->get();
        $refkarya = RefferenceItems::where('Refference_id', '17')->get();
        $branch = Branchs::all();

        return view('admin/katalog/entrikatalog', compact('jenisBahan', 'kataSandang', 'refitems', 'refkarya', 'branch'));
    }

    public function store(Request $request)
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
        $catalog->save();



        return redirect('katalog');
    }
}
