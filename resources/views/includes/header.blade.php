<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Cakru ARC 17</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ Request::segment(1) === null ? 'active' : null }}">
        <a class="nav-link" href="{{ url('' )}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'member' ? 'active' : null }}">
        <a class="nav-link" href="{{ url('member' )}}">Member</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'gallery' ? 'active' : null }}">
        <a class="nav-link" href="{{ url('gallery' )}}">Gallery</a>
      </li>
      <li class="nav-item {{ Request::segment(1) === 'register' ? 'active' : null }}">
        <a class="nav-link" href="{{ url('register' )}}">Register</a>
      </li>
    </ul>
  </div>
</nav>