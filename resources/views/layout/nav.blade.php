<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="/index">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item {{request()->is('create') ? 'active' : ''}}">
        <a class="nav-link" href="/create">Create</a>
      </li>
      <li class="nav-item {{request()->is('edit') ? 'active' : ''}}">
        <a class="nav-link" href="/edit">Edit</a>
      </li>
    </ul>
  </div>  
</nav>