@extends('layouts.master')

@section('title', 'Halaman Gallery')

@section('main')
    <h1>Halaman Gallery</h1>
    <div class="row">
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="https://tr.rbxcdn.com/457c684d88dd12d8b086087fb68c1928/768/432/Image/Png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Animeh</h5>
                    <p class="card-text">Some quick example text to build on the Animeh and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6  mt-5">
            <div class="card">
                <img src="https://tr.rbxcdn.com/457c684d88dd12d8b086087fb68c1928/768/432/Image/Png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Animeh</h5>
                    <p class="card-text">Some quick example text to build on the Animeh and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
