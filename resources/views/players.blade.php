@extends('layout.app')

@section('body')
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">球隊</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">球員</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-4 col-md-3 col-lg-2">
                <img class="w-100" src="https://static.rti.org.tw/assets/thumbnails/2017/12/20/151373959668019.png" alt="道奇">
            </div>
            <div class="col-4 col-md-3 col-lg-2">
                <img class="w-100" src="https://static.rti.org.tw/assets/thumbnails/2017/12/20/151373959668019.png" alt="道奇">
            </div>
            <div class="col-4 col-md-3 col-lg-2">
                <img class="w-100" src="https://static.rti.org.tw/assets/thumbnails/2017/12/20/151373959668019.png" alt="道奇">
            </div>
        </div>

    </div>

@endsection
