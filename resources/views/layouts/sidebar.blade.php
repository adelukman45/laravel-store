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
      <li class="{{ (request()->is('home')?'active':'') }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fa fa-home"></i> <span>{{ __('Home') }}</span>
        </a>
      </li>
      <li class="menu-header">{{ __('Menu') }}</li>
      <li class="{{ (request()->is('account')?'active':'') }}">
        <a class="nav-link" href="{{ route('account.index') }}">
          <i class="fa fa-user"></i> <span>{{ __('Account') }}</span>
        </a>
      </li>
      <li class="{{ (request()->is('product')?'active':'') }}">
        <a class="nav-link" href="{{ route('product.index') }}">
          <i class="fa fa-box"></i> <span>{{ __('Product') }}</span>
        </a>
      </li>
      <li class="{{ (request()->is('category')?'active':'') }}">
        <a class="nav-link" href="{{ route('category.index') }}">
          <i class="fa fa-box"></i> <span>{{ __('Category') }}</span>
        </a>
      </li>
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