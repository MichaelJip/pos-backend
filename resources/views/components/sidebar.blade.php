<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand-img">
            <img src="{{ asset('img/MJS.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            {{-- <a href="index.html">MJ Salon</a> --}}
        </div>
        {{-- <div class="sidebar-brand-sm-img">
            <img src="{{ asset('img/MJS.png') }}"
            alt="logo"
            width="50"
            class="shadow-light rounded-circle">
        </div> --}}
        <ul class="sidebar-menu">
            <li class=''>
                <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
            </li>
            <li class=''>
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class=''>
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class=''>
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class=''>
                <a class="nav-link" href="{{ route('discounts.index') }}">Discount</a>
            </li>

        </ul>
</div>
