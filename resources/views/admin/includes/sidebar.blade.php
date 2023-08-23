
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
       
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
        

            <li class="nav-item">
            <a href="{{route('admin.post.index')}}" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
              Посты
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link">
              <i class="nav-icon far fa-users"></i>
              <p>
              Пользователи
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
               Категории
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.tag.index')}}" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
               Теги
              </p>
            </a>
          </li>
          
        </ul>
        <!-- Sidebar -->
      
        <!-- /.sidebar -->
    </aside>