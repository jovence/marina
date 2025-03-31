<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.categories') }}">
                <i class="mdi mdi-shape-outline menu-icon"></i>

                <span class="menu-title">Cathegory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.add-product') }}">
                <i class="mdi mdi-package-variant menu-icon"></i>
                <span class="menu-title">Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.orders') }}">
                <i class="mdi mdi-clipboard-list-outline menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>

    </ul>
</nav>
