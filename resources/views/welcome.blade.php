@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if(Auth::user() and Auth::user()->account == "student")

                       <a href="/student/profile">Student Profile</a>
                    @elseif(Auth::user() and Auth::user()->account == "employer")
                        <a href="/employer/dashboard">Employer Dashboard</a>
                    @else
                        Not logged in
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
