<div class="sidebar">
  <div class="sidebar-logo-wrapper">
    <img src="{{ URL::asset('images/general/logo.png')}}" alt="Ayuda, Oe logo">
  </div>
  <div class="sidebar-welcome-wrapper">
    <p class="sidebar-welcome">Hola!</p>
    {{-- <div class="sidebar-welcome-photo-wrapper">
      <img src="" alt="Voz Animal logo" />
    </div> --}}
    <p class="sidebar-welcome-name">VOZ ANIMAL</p>
  </div>
  <ul class="sidebar-links">
    <a href="{{ route('home') }}">
      <li class="sidebar-link {{ (request()->is('dashboard') ? 'is-active' : '') }}">
        <span class="icon-home {{ (request()->is('dashboard') ? 'is-active' : '') }}"></span>
        <p class="sidebar-link-text">Dashboard</p>
      </li>
    </a>
    <a href="{{ route('campaigns.index') }}">
      <li class="sidebar-link {{ (request()->is('campanas') || request()->is('campanas/*') ? 'is-active' : '') }}">
        <span class="icon-happy-face {{ (request()->is('campanas') || request()->is('campanas/*') ? 'is-active' : '') }}"></span>
        <p class="sidebar-link-text">Campañas</p>
      </li>
    </a>
    <a href="{{ route('users') }}">
      <li class="sidebar-link {{ (request()->is('usuarios') || request()->is('usuarios/*') ? 'is-active' : '') }}">
        <span class="icon-user {{ (request()->is('usuarios') || request()->is('usuarios/*') ? 'is-active' : '') }}"></span>
        <p class="sidebar-link-text">Usuarios</p>
      </li>
    </a>
    <a href="#">
      <li class="sidebar-link">
        <span class="icon-list-button"></span>
        <p class="sidebar-link-text">Dashboard</p>
      </li>
    </a>
  </ul>
  <div class="sidebar-name-wrapper">
    <img src="{{ URL::asset('images/general/name.png')}}" alt="Ayuda, Oe logo">
  </div>
</div>