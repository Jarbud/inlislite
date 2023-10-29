@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container" class="fade-up">
        <h1>Survey Terhadap Pemustaka</h1>
      </div>
    </section>

<section class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('survey') }}" method="POST">
        @csrf
        <div class="question-icons-container">
            <div class="question-icon" id="icon1"> <h1><i class="bi bi-check2-square"></i></h1> </div>
            <div class="question-icon" id="icon2"> <h1><i class="bi bi-check2-square"></i></h1> </div>
            <div class="question-icon" id="icon3"> <h1><i class="bi bi-check2-square"></i></h1> </div>
        </div>
    
        <div class="question" style="display: none;">
        <label>Petugas memberikan perhatian yang sungguh-sungguh kepada saya</label>
        <br>
        <input type="radio" name="question1" value="Pilihan 1" required> Pilihan 1
        <br>
        <input type="radio" name="question1" value="Pilihan 2"> Pilihan 2
        <br>
        <input type="radio" name="question1" value="Pilihan 3"> Pilihan 3
        <br>
        </div>

        <div class="question" style="display: none;">
            <label>Petugas memberikan perhatian yang sungguh-sungguh kepada saya</label>
            <br>
            <input type="radio" name="question2" value="Pilihan 1" required> Pilihan 11
            <br>
            <input type="radio" name="question2" value="Pilihan 2"> Pilihan 21
            <br>
            <input type="radio" name="question2" value="Pilihan 3"> Pilihan 31
            <br>
        </div>
        <div class="question" style="display: none;">
            <label>Petugas memberikan perhatian yang sungguh-sungguh kepada saya</label>
            <br>
            <input type="radio" name="question3" value="Pilihan 1" required> Pilihan 12
            <br>
            <input type="radio" name="question3" value="Pilihan 2"> Pilihan 22
            <br>
            <input type="radio" name="question3" value="Pilihan 3"> Pilihan 32
            <br>
        </div>
        <br>
        <div class="button-container">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</section>

@endsection