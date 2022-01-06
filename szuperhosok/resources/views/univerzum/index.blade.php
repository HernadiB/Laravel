@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center py-3">Univerzum választása</h1>

    <div class="row row-col-6">
        @foreach($univerzumok as $univerzum)
            <div class="col-sm-3 align-self-stretch my-3">
                <div class="card  h-100">
                    <img src="{{asset("img/brands/{$brand->image}")}}" class="card-img-top" alt="{{$brand->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$brand->name}}</h5>
                        <div class="card-text">{{count($brand->teas)}} tea található az adatbázisban</div>
                        <a href="{{route("brand.show",["slug"=>$brand->slug])}}" class="btn btn-primary align-self-end">Mutasd</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
