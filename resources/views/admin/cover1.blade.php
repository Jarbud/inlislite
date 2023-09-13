@extends('admin/entrikatalog')

@section('title', 'Cover')

@section('bagian')
<section id="kat3">
    <div class="container" style="display: flex;">
        <div class="box">
            <div id="imagePreview">
                @if (session('imageId'))
                @php
                $cover = \App\Models\Cover::find(session('imageId'));
                @endphp
                @if ($cover)
                <img id="previewImage" src="data:image/jpeg;base64,{{ base64_encode($cover->image_data) }}"
                    alt="Cover Image">
                @else
                <img id="previewImage" src="" alt="No Image Found">
                @endif
                @else
                <img id="previewImage" src="" alt="No Image Found">
                @endif
            </div>
        </div>

        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
            @csrf
            <div class="form-group">
                <label for="image">Unggah Cover:</label>
                <div class="input-group">
                    <input type="text" id="selectedFileName" class="form-control" placeholder="Pilih file..." readonly>
                    <span class="input-group-btn">
                        <button type="button" onclick="document.getElementById('imageInput').click()">
                            <i class="fas fa-folder"></i>
                        </button>
                    </span>
                </div>
            </div>
            <input type="file" name="image" accept="image/*" id="imageInput" style="display: none;"
                onchange="updateFileName()">
            <button type="submit">Unggah</button>
        </form>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</section>
@endsection