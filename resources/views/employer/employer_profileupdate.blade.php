@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('employer.employer_side_nav')
        </div>
        <div class="col-md-6">
            <h1>Update Profile</h1>
            <form>
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>Bio</label>
                    <textarea class="form-control" rows="7"></textarea>
                </div>
                 <div class="form-group">
                    <label>Interests</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
         <div class="col-md-3">
            <img
                src="{{ asset('images/profile-icon.png') }}" class="img-thumbnail"
                width="250" height="250">
            <br>
            <button type="submit" class="btn btn-primary">
                Update Photo
            </button>
        </div>
    </div>
@endsection