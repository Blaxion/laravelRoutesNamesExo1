@extends('layout.index')
@section('body')
<div class="row">
    @foreach ( $front as $perso )
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{$perso['chemin']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$perso['nom']}}</h5>
                <p class="card-text">{{$perso['fonction']}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection