<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Todo List</a>
    </li>
    <li class="{{Request::is('/') ? 'active' : ''}}">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="{{Request::is('todo/create') ? 'active' : ''}}">
      <a class="nav-link" href="todo/create">Create</a>
    </li>

  </ul>
</nav>
