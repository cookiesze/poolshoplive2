<div class="dropdown-menu pull-right dropdown-menu-scale">
    <a class="dropdown-item" ui-sref="app.inbox.list">
      <span>Inbox</span>
      <span class="label warn m-l-xs">3</span>
    </a>
    <a class="dropdown-item" ui-sref="app.page.profile">
      <span>Profile</span>
    </a>
    <a class="dropdown-item" ui-sref="app.page.setting">
      <span>Settings</span>
      <span class="label primary m-l-xs">3/9</span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" ui-sref="app.docs">
      Need help?
    </a>
    <a class="dropdown-item" ui-sref="access.signin" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </div>
