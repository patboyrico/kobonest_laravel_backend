<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  {{ Request::url() === url('agent/dashboard') ? 'kt-menu__item--active' : ''}} " aria-haspopup="true"><a href="{{ route('agent.dashboard') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
                <li class="kt-menu__item {{ Request::url() === url('/agent/transfers') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('agent.transfers') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Transfers</span></a></li>
                <li class="kt-menu__item {{ Request::url() === url('/agent/users') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('agent.users') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-laptop"></i><span class="kt-menu__link-text">Users</span></a></li>
                {{-- <li class="kt-menu__item {{ Request::url() === url('/deposits') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('user.deposits') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-contract"></i><span class="kt-menu__link-text">Deposits</span></a>
                </li>
                <li class="kt-menu__item {{ Request::url() === url('/savings') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('user.savings') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-piggy-bank"></i><span class="kt-menu__link-text">Savings</span></a>
                </li>
                <li class="kt-menu__item {{ Request::url() === url('/transactions') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('user.transactions') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-console"></i><span class="kt-menu__link-text">Transactions</span></a>
                </li>
                <li class="kt-menu__item {{ Request::url() === url('/loans') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('user.loans') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-browser-2"></i><span class="kt-menu__link-text">Loans</span></a>
                </li>
                <li class="kt-menu__item {{ Request::url() === url('/support') ? 'kt-menu__item--active' : ''}}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('user.tickets') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-support"></i><span class="kt-menu__link-text">Support</span></a>
                </li> --}}
            </ul>
        </div>
    </div>

    <!-- end:: Aside Menu -->
</div>
