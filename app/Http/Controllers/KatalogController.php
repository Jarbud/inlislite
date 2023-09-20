<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\worksheets;
use App\Models\kata_sandang;
use App\Models\RefferenceItems;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function show()
    {
        $jenisBahan = worksheets::all();
        $kataSandang = kata_sandang::all();
        $refitems = RefferenceItems::where('Refference_id', '5')->get();
        $refkarya = RefferenceItems::where('Refference_id', '17')->get();
        return view('admin/katalog1', compact('jenisBahan', 'kataSandang', 'refitems', 'refkarya'));
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
            $author .= $pengarangTambahan;
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
            $subject .= $Subjek;
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
            $callnumber .= $noPanggil;
        }
        if ($callnumber === "") {
            $callnumber = null;
        }

        $isbn = "";
        if (!empty($Isbn)) {
            $isbn .= $Isbn;
        }
        if ($isbn === "") {
            $isbn = null;
        }

        $note = "";
        if (!empty($Catatan)) {
            $note .= $Catatan;
        }
        if ($note === "") {
            $note = null;
        }

        $catalog = new Catalog();
        $catalog->Title = $title;
        $catalog->Author = $author;
        $catalog->PublishLocation = $publishlocation;
        $catalog->Publisher = $publisher;
        $catalog->PublishYear = $publishyear;
        $catalog->Publikasi = $publikasi;
        $catalog->PhysicalDescription = $physicaldescription;
        $catalog->Edition = $edition;
        $catalog->Subject = $subject;
        $catalog->DeweyNo = $deweyno;
        $catalog->CallNumber = $callnumber;
        $catalog->ISBN = $isbn;
        $catalog->Note = $note;

        $catalog->save();

        return redirect('katalog');
    }
}
