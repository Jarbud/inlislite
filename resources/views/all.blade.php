@extends('masteradmin')
@section('content')

                        <div class="checkbox-container">
                            <input type="checkbox" id="check-all" onchange="checkAll(this)">
                            <label for="check-all">
                                Select All
                            </label>
                            <br>
                            <input type="checkbox" id="option-A">
                            <label for="option-A">Option A</label><br>
                            <input type="checkbox" id="option-B">
                            <label for="option-B">Option B</label><br>
                            <input type="checkbox" id="option-C">
                            <label for="option-C">Option C</label>
                        </div>

                        <ul class="chosen-results">
                            <li class="active-result">Select</li>
                            <li class="active-result">1</li>
                            <li class="active-result">2</li>
                        </ul>

                        <a href="assets/img/iqbaal.jpg" class="btn btn-primary" download>Download Foto Iqbaal</a>

@endsection