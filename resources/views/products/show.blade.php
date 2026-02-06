@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <a href="{{route("products.index")}}" class="ms-2 mt-3 btn btn-secondary">
            retour
        </a>
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8 col-12 my-2">
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('images/'.$product['image']) }}" alt="" class=" h-100 w-100 card-img-top p-3">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product['title'] }}</h5>
                        <p class="text-success fw-semibold">{{ $product['price'] }} MAD</p>
                        <p class="text-dark fw-semibold">{{ $product['description'] }}</p>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection