@extends('layouts.app')
@section('content')
    <div>
        <a href="{{route("home")}}" class="btn btn-secondary ms-2 mt-3">retour</a>
        <div class="conteiner-fluid row gap-1 my-3">
            @foreach ($products as $product)
            {{-- @foreach ($hna table li kayn fController as $l component) --}}
            <div class="col-8 col-md-4">
                <x-product-card :product="$product" />
            </div>
            @endforeach
        </div>
    </div>
@endsection