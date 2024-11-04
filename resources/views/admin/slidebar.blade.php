<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin Crown</h1>
            <p>CEO</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="{{url('admin')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('all_msg')}}"> <i class="icon-mail"></i>Send message</a></li>
                <li><a href="{{url('table')}}"> <i class="icon-grid"></i>Tables </a></li>
                <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Room</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add Room</a></li>
                    <li><a href="{{url('view_room')}}">View Room</a></li>
                    <li><a href="{{url('boking_aprove')}}">Booking Approve</a></li>
                  </ul>
                </li>
      </nav>
      <!-- Sidebar Navigation end-->
    