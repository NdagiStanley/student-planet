@extends('layouts.app')

@section('content')
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
                        <li class="list-group-item">
                            <h3>Interests</h3>
                            <h4>IT, Design</h4>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 list-group">
                    <div class="list-group">
                      <a href="#" class="list-group-item active">
                        <h4 class="list-group-item-heading">Bio</h4>
                        <p class="list-group-item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            <br>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="{{ route('employer_task') }}" class="btn btn-success pull-right">Add Job/ Task</a>
            </div>
        </div>
    @endsection
@endsection