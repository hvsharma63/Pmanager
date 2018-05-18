@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-lg-9 pl-5">
            <form method="post" action="{{route('companies.update',[$company->id])}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input type="text" class="form-control" id="company-name" name="name" placeholder="Enter Company Name" value="{{$company->name}}">
                </div>
                <div class="form-group">
                    <label for="comapany-desc">Description</label>
                    <textarea type="text" class="form-control" id="company-desc" name="description" placeholder="Enter Proper Company Description" 
                    rows=5 spellcheck="false">{{$company->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
                {{-- <button class="btn btn-info" name="Cancel" href="/companies/{{$company->id}}">Cancel</button> --}}
            </form>
        </div>
        
        <div class="list-group col-md-3">
            <div class="col-md-12 pr-5" style="flex: 0 0 50%">
                <a class="list-group-item list-group-item-action list-group-item-danger text-black"><b>Actions</b></a>
                <a href="/companies/{{$company->id}}" class="list-group-item list-group-item-action">View this Company</a>
                <a href="/companies/" class="list-group-item list-group-item-action">View All Companies</a>
            </div>
        </div>
    </div>
            
@endsection