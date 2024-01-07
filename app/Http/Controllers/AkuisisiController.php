<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\collectioncategorys;
use App\Models\location_library;
use App\Models\Locations;
use App\Models\CollectionSources;
use App\Models\CollectionMedias;
use App\Models\CollectionRules;
use App\Models\CollectionStatus;
use App\Models\matauang;
use App\Models\collections;
use App\Models\partners;
use Illuminate\Http\Request;

class AkuisisiController extends Controller
{
    public function show()
    {
        $worksheets = worksheets::all();
        $kategori = collectioncategorys::all();
        $lokasiperpus = location_library::all();
        $lokasi = Locations::all();
        $jenissumber = CollectionSources::all();
        $bentukfisik = CollectionMedias::all();
        $akses = CollectionRules::all();
        $status = CollectionStatus::all();
        $matauang = matauang::all();
        $collections = collections::all();
        $partners = partners::all();
        return view('admin/akuisisi/0entrikoleksi', compact('worksheets', 'kategori', 'lokasiperpus', 'lokasi', 'jenissumber', 
                    'bentukfisik', 'akses', 'status', 'matauang', 'collections', 'partners'));
    }

    public function store(Request $request)
    {

        /* ??? $JenisBahan->Name = $request->input('JenisBahan');*/
        
        /* $NoInduk->NoInduk = $request->input('NoInduk'); */
        
        /*$JenisBahan = $request->input('JenisBahan');
        $koleksi->Name = $JenisBahan;*/

        /*$count = collections::getQuery()->count();
        $collectionsID = $count + 1;*/

        /*$koleksi = new collections();
        $koleksi->ID = $collectionsID;
        $koleksi->NoInduk = $request->input('NoInduk');
        $koleksi->NomorBarcode = $request->input('NomorBarcode');
        $koleksi->RFID = $request->input('RFID');
        $koleksi->save();*/



        /*$Induk = $request->input('NoInduk');
        $Barcode = $request->input('NomorBarcode');
        $noRFID = $request->input('RFID');

        $induk = "$Induk";*/


        /*

        $Barcode = $request->input('NomorBarcode');
        $noRFID = $request->input('RFID');

        $koleksi = new collections();
        $koleksi->NomorBarcode = $Barcode;
        $koleksi->RFID = $noRFID;
        $koleksi->NoInduk = $request->input('NoInduk');
        $koleksi->save();

        */



        $partner = new partners();
        $partner->Name = $request->input('PartnerName');
        $partner->Address = $request->input('PartnerAddress');
        $partner->Phone = $request->input('PartnerPhone');
        $partner->Fax = $request->input('PartnerFax');
        $partner->Province = $request->input('PartnerProvince');
        $partner->City = $request->input('PartnerCity');
        $partner->save();

        $count = collections::getQuery()->count();
        $collectionsID = $count + 1;

        $koleksi = new collections();
        $koleksi->ID = $collectionsID;
        $koleksi->Worksheets_id = $request->input('ColWorksheet');
        $koleksi->JumlahEksemplar = $request->input('ColJumEks');
        $koleksi->NoInduk = $request->input('ColNoInduk');
        $koleksi->NomorBarcode = $request->input('ColNomorBarcode');
        $koleksi->RFID = $request->input('ColRFID');
        $koleksi->TanggalPengadaan = $request->input('ColTanggalPengadaan');
        $koleksi->Source_id = $request->input('ColSource');
        $koleksi->Partner_id = $request->input('ColPartner');
        $koleksi->Media_id = $request->input('ColMedia');
        $koleksi->Category_id = $request->input('ColCategory');
        $koleksi->Rule_id = $request->input('ColRule');
        $koleksi->Location_Library_id = $request->input('ColLocationLib');
        $koleksi->Location_id = $request->input('ColLocation');
        $koleksi->Status_id = $request->input('ColStatus');
        $koleksi->Currency = $request->input('ColCurrency');
        $koleksi->Price = $request->input('ColPrice');
        $koleksi->PriceType = $request->input('ColPriceType');
        $koleksi->CallNumber = $request->input('ColCallNumber');
        $koleksi->save();

        return redirect('0entrikoleksi');
    }


}
