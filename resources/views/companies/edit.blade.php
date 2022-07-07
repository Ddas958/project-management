@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-9" >
        <form method="post" action="{{route('companies.update',[$company->id])}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
            <label for="company-name">Name<span class="required">*</span></label>
            <input  placeholder="enter name" 
                    id="company-name" 
                    required 
                    name="name" 
                    class="form-control"
                    value="{{ $company->name }}"/>

            </div>
            <div class="form-group">
            <label for="company-name">Description<span class="required">*</span></label>
            <textarea  placeholder="enter description" 
                    id="company-desc" 
                    required 
                    name="description" 
                    class="form-control"
                    rows="5">{{ $company->description }}
                    </textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit">
            </div>
        </form>
        
    </div>
    <div class="col-md-3">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{$company->id}}">view company</a></li>
                <li><a href="/companies/">all companies</a></li>
            </ol>
        </div>
    </div>
</div>

@endsection