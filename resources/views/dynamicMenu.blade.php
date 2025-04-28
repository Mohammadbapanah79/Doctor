@extends('admin.layouts.master')
@section('content')
    <body class="bg-dark">
    <nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
        <a class="navbar-brand" href="#">Nicesnippets.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @foreach($menus as $menu)
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ count($menu->childs) ? 'dropdown-toggle' :'' }}"
                           href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ $menu->title }}
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            @if(count($menu->childs))
                                @include('menu.menusub',['childs' => $menu->childs])
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
    <div style="position: absolute; left:2%; top:55%;">
        <h2 class="bg-white p-2 shadow-lg rounded">Multi Level Dynamic Menu In Laravel Treeview - Nicesnippets.com</h2>
    </div>
@endsection
