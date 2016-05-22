
<ul class="list-group">
    <li class="list-group-item{{ url()->current() == route('new_project') ? ' active': '' }}">
        <a href="{{ route('new_project') }}">Add New Project</a>
    </li>
    <li class="list-group-item{{ url()->current() == '101' ? ' active': '' }}">
        <a href="{{ route('new_project') }}">Update Profile</a>
    </li>
</ul>