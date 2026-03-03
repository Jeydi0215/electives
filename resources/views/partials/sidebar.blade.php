<div class="sidebar">

    <span class="brand">MyApp</span>

    <a href="{{ route('dashboard') }}"
       @class(['active' => $active === 'dashboard'])>
        Dashboard
    </a>

    <a href="{{ route('students') }}"
       @class(['active' => $active === 'students'])>
        Students
    </a>

    <a href="{{ route('courses') }}"
       @class(['active' => $active === 'courses'])>
        Courses
    </a>

    <a href="{{ route('reports') }}"
       @class(['active' => $active === 'reports'])>
        Reports
    </a>

</div>