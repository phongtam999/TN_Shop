<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            {{-- <li class="nav-label">Trang Chủ</li> --}}
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Trang Chủ</span>
                </a>
             
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Thương Hiệu</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories.index')}}">Danh Sách</a></li>
                    <li><a href="{{route('categories.trash')}}">Thùng Rác</a></li>
                </ul>
            </li>
            
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Sản Phẩm</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('products.index')}}">Danh Sách</a></li>
                    <li><a href="{{route('products.trash')}}">Thùng Rác</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Khách Hàng</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('customers.index')}}">Danh Sách Khách Hàng</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-graph menu-icon"></i> <span class="nav-text">Đơn Đặt Hàng</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Danh sách</a></li>
                   
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Nhân Viên</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('users.index')}}">Danh Sách</a></li>
                    
            </li>

           
        </ul>
        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="icon-notebook menu-icon"></i><span class="nav-text">Nhóm Nhân Viên</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="./page-login.html">Danh Sách</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </div>
</div>