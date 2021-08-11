@php
    if(!isset($is_collapsed)){
        $is_collapsed = false;
    }
@endphp
<nav id="sidebar" class="sidebar js-sidebar {{$is_collapsed ? 'collapsed': ''}}">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('admin.homeAdmin')}}">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.homeAdmin')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/post*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.postList')}}">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Post</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.categories.index')}}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/tag*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.tags.index')}}">
                    <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Tags</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/comment*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.categories.index')}}">
                    <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Comment</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/user*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.users.index')}}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">User</span>
                </a>
            </li>
            <li class="sidebar-header">
                Class
            </li>

            <li class="sidebar-item {{ request()->is('admin/registrations*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations.index')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Registration</span>
                </a>
            </li>

            <li class="sidebar-header">
                CRM
            </li>
            <li class="sidebar-item {{ request()->is('admin/contact*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.contacts.index')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Contacts</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->is('admin/project*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations.index')}}">
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Projects</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('admin/client*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations.index')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Clients</span>
                </a>
            </li>
            <li class="sidebar-item {{ request()->is('admin/chat*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations.index')}}">
                    <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Chats</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <div class="d-grid">
                    <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary">Add New Post</a>
                </div>
            </div>
        </div>
    </div>
</nav>
