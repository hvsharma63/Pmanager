@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-9 pl-5">
            <div class="jumbotron">
                <h1 class="display-5"> {{ $company->name }}</h1>
                <p class="lead">{{ $company->description }}</p>
            </div>

            <div class="card-deck">
                @foreach($company->projects as $project)
                    <div class="card">
                        {{-- <img class="card-img-top" src=".../100px200/" alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$project->name}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                            <button class="btn btn-info btn-md" href="/projects/{{$project->id}}">Read More</button>
                            {{-- <p class="card-text"><small class="text-muted">Period = {{$project->days}}</small></p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <div class="list-group col-md-3">
            <div class="col-md-12 pr-5" style="flex: 0 0 50%">
                <a class="list-group-item list-group-item-action list-group-item-danger text-black"><b>Actions</b></a>
                <a href="/companies/{{$company->id}}/edit" class="list-group-item list-group-item-action">Edit</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }">
                  Delete
                </a>
                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>
            </div>
        
            <div class="col-md-12 pr-5">
                <a class="list-group-item list-group-item-action list-group-item-danger text-black"><b>Members</b></a>
                <a href="#" class="list-group-item list-group-item-action">John</a>
                <a href="#" class="list-group-item list-group-item-action">Joe</a>
                <a href="#" class="list-group-item list-group-item-action">Jessica</a>
            </div>
        </div>
    </div>
            
@endsection