@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('student.student_side_nav')
        </div>
        <div class="col-md-6">
            <h1>Add a project</h1>
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title of the Project">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="7" placeholder="Briefly describe what this project was all about"></textarea>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" placeholder="Link to your project">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection