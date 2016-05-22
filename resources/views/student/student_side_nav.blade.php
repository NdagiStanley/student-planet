
<ul class="list-group">
    <li class="list-group-item{{ url()->current() == route('new_project') ? ' active': '' }}">
        <a href="{{ route('new_project') }}">Add New Project</a>
    </li>
    <li class="list-group-item{{ url()->current() == route('profile_update') ? ' active': '' }}">
        <a href="{{ route('profile_update') }}">Update Profile</a>
    </li>
</ul>