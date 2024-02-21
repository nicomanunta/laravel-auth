@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2>Tutti i progetti</h2>
                    </div>
                    <div>
                        <a href=""><button class="btn btn-sm btn-primary">Aggiungi progetto</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome progetto</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Data</th>
                        <th scope="col">TOOlS</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->nome_progetto}}</td>
                            <td>{{Str::limit($project->descrizione, 40, '...')}}</td>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->cover_immagine}}</td>
                            <td>{{$project->data}}</td>
                            <td>TOOLS</td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection