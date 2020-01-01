<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('home') }}">{{ config('app.shortname', 'LV') }}</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">{{ __('Dashboard') }}</li>
      <li class="{{ (request()->is('/')?'active':'') }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fa fa-home"></i> <span>{{ __('Home') }}</span>
        </a>
      </li>
      <li class="menu-header">{{ __('Menu') }}</li>
      <li class="menu-header">{{ __('Logout') }}</li>
      <li>
        <a class="nav-link text-danger" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> <span>{{ __('Logout') }}</span>
        </a>
      </li>
    </ul>
  </aside>
</div>