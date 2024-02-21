@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{$project->cover_immagine}}" alt="">
                <h2>{{$project->nome_progetto}}</h2>
                <p>{{$project->descrizione}}</p>
                <span>{{$project->slug}}</span>
                <br>
                <span>{{$project->data}}</span>
            </div>
        </div>
    </div>
@endsection