<header id="navbar">
  <div id="logo">
    <h4><a href="#">لوگوی شرکت</a></h4>
  </div>
  <div id="toggler">
    <i class="fa fa-bars"></i>
  </div>
  <nav id="nav">
    <ul class="list-unstyled">
      @foreach(wp_nav_menu( array( 'theme_location' => 'main-menu' ) ) as $row)
        <li>{{$row}}</li>
        @endforeach
    </ul>


  </nav>
</header>



