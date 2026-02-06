@extends('layouts.app')
@section('content')
    <div>
        <h3 class="mt-3 text-dark">
            Bienvenue Dans Notre Page
        </h3>
        <p class="text-dark">Lorem ipsum dolor sit amet consectetur.</p>
        <a href="{{route("products.index")}}" class="btn btn-primary">
            Voir nos produits
        </a>
    </div>
@endsection