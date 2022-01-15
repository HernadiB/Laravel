@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center py-3">{{$unierzum->name}}</h1>
    <hr>
    <div class="row">
        @foreach($univerzumok as $u)
            <div class="col-md-6">
                <h2>{{$u->nev}}</h2>
                <img class="img-fluid" src="{{asset("img/" . $u->hatter)}}" title="{{$u->nev}}}">
                <a href="{{route("univerzum.view", ['id' => $u->id])}}}" class="btn btn-primary">{{$u->nev}} filmek</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
