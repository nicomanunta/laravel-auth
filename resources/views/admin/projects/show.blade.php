@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{$project->cover_immagine !== null ? asset('/storage/' . $project->cover_immagine) : asset('/img/immagine.png')}}" alt="{{$project->nome_progetto}}">
                <h2>{{$project->nome_progetto}}</h2>
                <span>{{$project->slug}}</span>
                <p class="mt-5">{{$project->descrizione}}</p>
                
                <span class="mt-5">data: {{$project->data}}</span>

                
            </div>
        </div>
    </div>
@endsection