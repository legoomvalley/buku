{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    @can('auth')
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
    @endcan
</li>
@can('manage book')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('book') }}"><i class="nav-icon la la-address-book"></i> Book List</a></li>

@endcan
@can('manage librarian')
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('librarian') }}"><i class="nav-icon la la-male"></i> Librarians</a></li>
@endcan

@can('manage borrow')
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('borrow') }}"><i class="nav-icon la la-calendar-minus"></i> Transactions </a></li>
@endcan

@can('manage penalty')
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('penalty') }}"><i class="nav-icon la la-money-bill"></i> Penalties</a></li>
@endcan