@extends('layouts.app')

@section('content')
    <div class="card text-white bg-primary col-md-6 offset-md-3">
        <div class="card-header">
            Companies Details
        </div>
        <div class="card-body">
            <h5 class="card-title">Company Name</h5>
            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-dark">Go somewhere</a> --}}
            <ul class="list-group">
                @foreach($companies as $company)
                    <li class="list-group-item list-group-item-success"> <a href="/companies/{{$company->id}}"> {{ $company->name }} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection