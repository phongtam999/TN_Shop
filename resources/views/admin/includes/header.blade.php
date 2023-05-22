<div class="header">
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        {{-- @if(Auth::check() && Auth::user()->image) --}}
                            {{-- <img src="{{ asset(Auth::user()->image) }}" height="40" width="40" alt=""> --}}
                        {{-- @endif --}}

                    </div>
                    <div class="drop-down dropdown-profile   dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{route('users.profile')}}"><i class="icon-user"></i>
                                        <span>Thông Tin </span></a>
                                </li>
                                <li>
                                    <a href="{{route('login')}}"><i class="ti-lock"></i> <span>Đăng Nhập</span></a>
                                </li>
                                <li><a href="{{route('logout')}}"><i class="ti-unlock"></i> <span>Đăng Xuất</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>