
<div class="deznav">
    <div class="deznav-scroll">
        <div class="dropdown header-profile">
            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"><img
                    src="images/profile/pic1.jpg" width="20" alt="">
                <div class="header-info">
                    <span class="font-w400 mb-0">
                        <span class="profile__name">نام کاربری : {{ auth()->user()->name }}</span>
                        <span class="profile__name">نقش : {{ auth()->user()->role }}</span>
                    </span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item ai-icon"><svg id="icon-user1"
                        xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18"
                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg><span class="ms-2">مشخصات</span></a><a href="#"
                    class="dropdown-item ai-icon"><svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                        class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg><span class="ms-2">خروج</span></a>
            </div>
        </div>
        <ul class="metismenu" id="menu">
            <li>
                <a class="ai-icon" href="" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">داشبورد</span>
                </a>
            </li>
            <li>
                <a class="ai-icon" href="" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">سفارشات</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="" aria-expanded="false"><i
                        class="flaticon-050-info"></i><span class="nav-text">پشتیبانی</span></a>
                <ul aria-expanded="false">
                    <li><a href="">ساخت تیکت</a></li>
                    <li><a href="">سوالات متداول</a></li>
                </ul>
            </li>
            @if (auth()->user()->role === 'admin')
                <li>
                    <a class="has-arrow ai-icon" href="" aria-expanded="false"><i
                            class="flaticon-050-info"></i><span class="nav-text">پنل ادمین</span></a>
                    <ul aria-expanded="false">
                        <li><a href="">کاربران</a></li>
                        <li><a href="">نظرات</a></li>
                        <li><a href="">محصولات</a></li>
                        <li><a href="">دسته بندی ها</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
