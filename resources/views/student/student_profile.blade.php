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
            <div class="pull-right">
                <a href="{{ route('new_project') }}" class="btn btn-success">Add new Project</a>
                <a href="{{ route('profile_update') }}" class="btn btn-success">Update Profile</a>
            </div>
        </div>
        <div id="video-library" class="col-md-12">
            @foreach(collect([1,2,3,4,5,6,7,8])->chunk(4) as $projects)
                <div class="row">
                @foreach($projects as $project)

                    <div class="col-md-3 project">
                        <img src="{{ asset('images/project.jpg') }}" class="img-thumbnail">
                        <h4 class="title">The cool title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu efficitur justo. Curabitur sapien purus, tempor nec metus vel, finibus tempus nibh. Proin in mi diam. Integer nec diam sagittis odio ullamcorper facilisis. Mauris et eros ultrices, tempor ex sit amet</p>
                        @if($project % 2 == 0)
                            <div class="verify-badge  verified"><i class="fa fa-thumbs-o-up"></i></div>
                        @endif
                        <a href="#">Project Link</span></a>
                    </div>
                @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection