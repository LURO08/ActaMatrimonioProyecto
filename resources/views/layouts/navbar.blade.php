<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        /* Modo claro */
        @media (prefers-color-scheme: light) {
        :root {
            --body-bg: #FFFFFF;
            --body-color: #000000;
            --dropdown-bg: #FFFFFF;
            --hover-color: #000;
        }
        }
        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
        :root {
            --body-bg: rgb(31, 41, 55);
            --body-color: rgb(156, 163, 175);
            --dropdown-bg: rgb(55, 65, 81);
            --hover-color: #ffffff;
        }
        }

        /* Basic styling for navbar */
        .navbar {
            background: var(--body-bg);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 0 20px;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
        }

        .navbar-logo {
            font-size: 20px;
            color: var(--body-color);
            text-decoration: none;
        }

        .navbar-links a {
            margin-right: 20px;
            text-decoration: none;
            color: var(--body-color);
        }
        .navbar-links a:hover{
            color: var(--hover-color);
        }

        .navbar-links a.active {
            color: #007BFF;
        }

        .navbar-user {
            display: flex;
            align-items: center;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            background: none;
            border: none;
            cursor: pointer;
        }

        .dropdown-menu {
            position: absolute;
            right: 0;
            background: var(--body-bg);
            border: 1px solid #ccc;
            display: none;
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: var(--body-color);
            white-space: nowrap;
        }

        .dropdown span{
            color: var(--body-color);
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Navbar container -->
    <nav class="navbar">
        <div class="navbar-content">
            <a href="{{ route('dashboard') }}" class="navbar-logo">Logo</a>
            
            <div class="navbar-links">
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('acta.create') }}"
                    class="{{ request()->routeIs('acta.create') ? 'active' : '' }}">Registrar Acta</a>
                <a href="{{ route('persona.create') }}"
                    class="{{ request()->routeIs('persona.create') ? 'active' : '' }}">Registrar Persona</a>
            </div>
            <div class="navbar-user">
               
                <div class="dropdown">
                    <button class="dropdown-toggle"> <span>{{ Auth::user()->name }}</span></button>
                    <div class="dropdown-menu">
                        <a href="{{ route('profile.edit') }}">Profile</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                            Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>
