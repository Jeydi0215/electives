<!DOCTYPE html>
<html>
<head>
    <title>Backend Lab</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

  .sidebar {
    width: 200px;
    background: #1f2937;
    padding: 20px;
    height: 100vh;
    display: flex;
    flex-direction: column;
}

.sidebar h3 {
    margin-bottom: auto;
}

.sidebar-links {
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex: 1;
}

        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            color: #d1d5db;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a.active {
            background: #3b82f6;
            color: white;
        }

        .sidebar a:hover {
            background: #374151;
        }

        .content {
            flex: 1;
            padding: 30px;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
   <div class="sidebar">
    <h3 style="color:white;">Electives</h3>

    <div class="sidebar-links">
        <a href="{{ route('dashboard') }}"
           @class(['active' => $active === 'dashboard'])>
            Dashboard
        </a>

        <a href="{{ route('users') }}"
           @class(['active' => $active === 'users'])>
            Users
        </a>

        <a href="{{ route('settings') }}"
           @class(['active' => $active === 'settings'])>
            Settings
        </a>
    </div>
</div>

    {{-- Page Content --}}
    <div class="content">
        @yield('content')
    </div>

</body>
</html>