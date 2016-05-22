@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('employer.employer_side_nav')
        </div>
        <div class="col-md-6">
            <h1>Add a Task</h1>
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title of the Task to be done">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" placeholder="is it under IT, HR, Hospitality, ...">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="7" placeholder="Briefly describe what this task will entail"></textarea>
                </div>
                <div class="form-group">
                    <label>Skills</label>
                    <input type="text" class="form-control" placeholder="Skill set required for the task">
                </div>
                <div class="form-group">
                    <label>Timeline</label>
                    <input type="text" class="form-control" placeholder="How long is this estimated to take">
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