@extends('master')
@section('content')

    <section id="title" class="title">
      <div class="container">
        <h1>Title</h1>
      </div>
    </section>

    <section>
        <label for="form_name">Title</label>
            <select class="bootstrap-select" onchange="func1(this.value)">
                <option value="1" selected="selected">Feature 1</option>
                <option value="2">Feature 2</option>
                <option value="3">Feature 3</option>
                <option value="4">Feature 4</option>
            </select>
        <div class="div-p" value="1"><p>Text1</p></div>
        <div class="div-p" value="2"><p>Text2</p></div>
        <div class="div-p" value="3"><p>Text3</p></div>
        <div class="div-p" value="4"><p>Text4</p></div>
        <div id="result"></div>
    </section>



@endsection    