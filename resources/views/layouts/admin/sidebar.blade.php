 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{!! Auth::user()->name !!}</p>
          <p class="app-sidebar__user-designation">{!! Auth::user()->email !!}</p>
        </div>
      </div>
      <ul class="app-menu">
          @if(Auth::user()->role != 1)
              <li><a class="app-menu__item active" href="{{ url('/admin') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
              <li><a class="app-menu__item" href="{{ route('model.create') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">User </span></a></li>
              <li><a class="app-menu__item" href="{{ route('brand.create') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project </span></a></li>
              <li><a class="app-menu__item" href="{{ route('item.create') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> <span class="app-menu__label">&nbsp;  Todo </span></a></li>
          @else
              <li><a class="app-menu__item active" href="{{ url('/home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
              <li><a class="app-menu__item" href="{{ route('user.todo') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> <span class="app-menu__label">&nbsp;  Todo </span></a></li>
          @endif
      </ul>
    </aside>
