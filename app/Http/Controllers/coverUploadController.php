<?php

namespace App\Http\Controllers;

use MongoDB\BSON\Binary;
use App\Models\Cover;
use Illuminate\Http\Request;

class coverUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('admin/cover1');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:1024',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $imageData = new Binary(file_get_contents($image->getRealPath()), Binary::TYPE_GENERIC);

            $cover = new Cover();
            $cover->image_data = $imageData;
            $cover->save();

            return redirect()->route('upload.form')->with('success', 'Cover berhasil diunggah')->with('imageId', $cover->id);
        }

        return redirect()->route('upload.form')->withErrors(['image' => 'Tidak ada gambar yang diunggah.']);
    }
}
