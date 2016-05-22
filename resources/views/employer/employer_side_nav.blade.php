
<ul class="list-group">
    <li class="list-group-item{{ url()->current() == route('employer_task') ? ' active': '' }}">
        <a href="{{ route('employer_task') }}">Add New Task</a>
    </li>
    <li class="list-group-item{{ url()->current() == route('employer_profile_update') ? ' active': '' }}">
        <a href="{{ route('employer_profile_update') }}">Update Profile</a>
    </li>
</ul>