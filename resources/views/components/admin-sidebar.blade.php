<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">
            <span class="logo-name">Hamro Khabar</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
            <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="settings"></i><span>Settings</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('company.index') }}">Company</a></li>
                <li><a class="nav-link" href="portfolio.html">Category</a></li>
            </ul>
        </li>


        <li class="dropdown ">
            <a href="index.html" class="nav-link"><i data-feather="paperclip"></i><span>Post</span></a>
        </li>
        <li class="dropdown">
            <a href="index.html" class="nav-link"><i data-feather="image"></i><span>Advertise</span></a>
        </li>

    </ul>
</aside>
