@extends('layouts.app')
@section('content')
    <div>
        <div class="col-md-12">
            <div class="col-md-3">
                <img src="{{ asset('images/profile-icon.png') }}" class="img-thumbnail"
                width="250" height="250">
            </div>
            <div class="col-md-5">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4><strong>Name:</strong> {{ Auth::user()->name }}</h4>
                    </li>
                    <li class="list-group-item">
                        <h4><strong>Email:</strong> {{ Auth::user()->email }}</h4>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('new_project') }}" class="btn btn-success pull-right">Add new Project</a>
        </div>
    </div>
@endsection