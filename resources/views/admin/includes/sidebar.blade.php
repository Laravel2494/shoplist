<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ auth()->user()->getAvatar() }}" class="img-circle" alt="{{ auth()->user()->getAvatar() }}">
        </div>
        <div class="pull-left info">
            <p>{{ auth()->user()->name . " " . auth()->user()->lastname }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
        <a href="{{ route('admin.index') }}">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
        </li>

        <li>
            <a href="{{ route('tovars.index') }}">
                <i class="fa fa-sticky-note-o"></i> 
                <span>Товары</span>
            </a>
        </li>

        <li>
            <a href="{{ route('menus.index') }}">
                <i class="fa fa-list-ul"></i>
                <span>Меню</span>
            </a>
        </li>

        <li>
            <a href="{{ route('categories.index') }}">
                <i class="fa fa-list-ul"></i>
                <span>Категории</span>
            </a>
        </li>
        
        {{-- <li><a href="#"><i class="fa fa-tags"></i> <span>Теги</span></a></li> --}}
        <li>
        <a href="{{ route('orders.index') }}">
            <i class="fa fa-commenting"></i> <span>Заказы</span>
            <span class="pull-right-container">
            <small class="label pull-right bg-green">5</small>
            </span>
        </a>
        </li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
        <li><a href="#"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>
    
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>