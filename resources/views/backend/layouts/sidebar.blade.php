<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Bảng điều khiển</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý slider
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý file</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('banner.index')}}" >
        <i class="fas fa-image"></i>
        <span>Quản lý ảnh bìa</span>
      </a>

    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Quản lý cửa hàng
        </div>
    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('category.index')}}" >
          <i class="fas fa-sitemap"></i>
          <span>Quản lý danh mục</span>
        </a>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('product.index')}}" >
          <i class="fas fa-cubes"></i>
          <span>Quản lý sản phẩm</span>
        </a>

    </li>

    {{-- Brands --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('brand.index')}}" >
          <i class="fas fa-table"></i>
          <span>Quản lý thương hiệu</span>
        </a>
    </li>

    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('shipping.index')}}">
          <i class="fas fa-truck"></i>
          <span>Quản lý vận chuyển</span>
        </a>

    </li>

    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('order.index')}}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Quản lý đơn hàng</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Quản lý đánh giá</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Quản lý bài đăng
    </div>

    <!-- Posts -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('post.index')}}" >
        <i class="fas fa-fw fa-folder"></i>
        <span>Tin Khuyến Mãi</span>
      </a>

    </li>

     <!-- Category -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('post-category.index')}}" >
          <i class="fas fa-sitemap fa-folder"></i>
          <span>Danh Mục Khuyến Mãi</span>
        </a>

      </li>

      <!-- Tags -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('post-tag.index')}}" >
            <i class="fas fa-tags fa-folder"></i>
            <span>Quản lý thẻ</span>
        </a>

    </li>

      <!-- Comments -->
     
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        Cài đặt chung
    </div>
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon.index')}}">
          <i class="fas fa-table"></i>
          <span>Mã Giảm Giá</span></a>
    </li>
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Quản lý tài khoản</span></a>
    </li>
     <!-- General settings -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Cài đặt</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
