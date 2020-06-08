<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
   <!-- <a href="http://fliplib.test/home" class="simple-text logo-normal">
      {{ __('FIIL') }} 
    </a>  -->
    
  <div class="mention">FLIP International Item Library</div>
  </div>
  
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">supervisor_account</i>
        <!-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> -->
          <p>{{ __('Library users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'item_lib' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('item_lib') }}">
          <i class="material-icons">account_balance</i>
            <p>{{ __('Browse item library') }}</p>
        </a>
      </li>       

      <li class="nav-item{{ $activePage == 'myItems' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('myItems') }}">
          <i class="material-icons">folder_open</i>
            <p>{{ __('My items') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'myPackages' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('myPackages') }}">
          <i class="material-icons">work_outline</i>
            <p>{{ __('My Packages') }}</p>
        </a>
      </li>

{{--       <li class="nav-item{{ $activePage == 'validation' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('validation') }}">
          <i class="material-icons">check_circle_outline</i>
            <p>{{ __('Item Validation Process') }}</p>
        </a>
      </li> --}}

      <li class="nav-item {{ ($activePage == 'validation' || $activePage == 'reviewer_Management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#validationProcess" aria-expanded="true">
         <i class="material-icons">check_circle_outline</i>
          <p>{{ __('Item Validation') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="validationProcess">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'validation' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('validation') }}">
                 
                <span class="sidebar-normal"><i class="fas fa-cogs miniIconMenu"></i>{{ __('Validation Process') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'myBoardReview' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('myBoardReview') }}">
                <span class="sidebar-normal"><i class="fas fa-microscope miniIconMenu"></i>{{ __('My reviews Dashboard') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'submit_items' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('submit_items') }}">  
              <span class="sidebar-normal"><i class="fas fa-flag-checkered miniIconMenu"></i>{{ __('Item submitted') }} </span>
            </a>
          </li>
            <li class="nav-item{{ $activePage == 'reviewer_Management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('reviewer_Management') }}">
                
                <span class="sidebar-normal"><i class="fas fa-user-cog miniIconMenu"></i>{{ __('Reviewer Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'forum' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('forum') }}">
          <i class="material-icons">forum</i>
            <p>{{ __('Forums') }}</p>
        </a>
      </li>   

      <li class="nav-item{{ $activePage == 'project' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('project') }}">
          <i class="material-icons">business</i>
            <p>{{ __('Projects') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'translation' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('translation') }}">
          <i class="material-icons">translate</i>
            <p>{{ __('Translation') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'teams' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('team') }}">
          <i class="material-icons">group</i>
            <p>{{ __('Teams presentation') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'documentation' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('documentation') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Documentation') }}</p>
        </a>
      </li>

      <!-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table') }}</p>
        </a>
      </li> -->
      <!--<li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
       <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> -->
      <!-- <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }} bg-danger">
        <a class="nav-link text-white" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>