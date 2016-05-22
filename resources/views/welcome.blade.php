@extends('layouts.app')

@section('content')
<div id="landing-page" class="text-center">
    <section class="landing-page-title">
        <h1>Welcome to <strong class="site-highlight">Student Planet</strong></h1>
        <hr>
        <h2>A social platform that links <strong class="site-highlight">Student</strong> talent with <strong class="site-highlight">Employers</strong>
        <br><br>
        <strong class="site-highlight">On Demand. </strong></h2>
        <div class="landing-page-call-to-action">

        @if (Auth::user() and Auth::user()->account == 'employer')
            <a href="{{ route('new_project') }}" class="btn btn-default">Add Projects</a> <a href="{{ route('student_profile') }}" class="btn btn-success">Profile</a>
        @elseif (Auth::user() and Auth::user()->account == 'student')
            <a href="{{ route('new_project') }}" class="btn btn-default">Add Projects</a>
            <a href="{{ route('student_profile') }}" class="btn btn-success">Profile</a>
        @endif

        </div>
    </section>
</div>
@endsection
