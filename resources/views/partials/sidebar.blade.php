<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('admin.projects.index')}}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                Projects
            </a>
        </li>
        <li>
            <a href="{{route('profile.edit')}}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                Profile
            </a>
        </li>
    </ul>

</div>