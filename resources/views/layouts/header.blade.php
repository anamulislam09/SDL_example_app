
<nav class="navbar navbar-expand-sm menu-bar hide">
  <div class="container-fluid">
    <ul class="navbar-nav ">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dept.index') }}">Department</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('assignMaster.index') }}">Assignment master</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('assignDetails.index') }}">Assignment master</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('barcode.create') }}"> Barcode Gnerate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('qrcode.create') }}"> Qrcode Gnerate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('essay.index') }}"> Essay-list</a>
      </li>
    </ul>
  </div>
</nav>