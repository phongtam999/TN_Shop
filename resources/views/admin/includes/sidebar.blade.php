<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Trang chủ</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i>
                    <span class="nav-text">Quản lý sản phẩm</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
                    <li><a href="{{route('products.trash')}}">Thùng rác</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>