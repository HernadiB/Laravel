@extends('layouts.main')

@section('content')
    <h1 class="text-center py-3">{{$univerzum->name}}</h1>

    <p>{{$univerzum->leiras}}}</p>

    @if($filmek == null)
        <div class="alert alert-warning" role="alert">
            Sajnos nincsennek filmek az adatbázisban!
        </div>
    @else
        <ul>
            @foreach($filmek as $f)
                <li>{{$f->cim_hu}}</li>
            @endforeach
        </ul>
    @endif
@endsection

