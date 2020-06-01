<ul class="kt-nav">

    <li class="kt-nav__item">
        <a href="{{ route('admin.users.create') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Create User</span>
        </a>
    </li>
    {{-- <li class="kt-nav__item">
        <a href="{{ route('user.saving.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">Create Subadmin</span>
        </a>
    </li> --}}
    <li class="kt-nav__item">
        <a href="{{ route('admin.agents.create') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Create Agent</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('admin.saving.category') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon-computer"></i>
            <span class="kt-nav__link-text">Savings Categories</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('admin.deposit.category') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-console"></i>
            <span class="kt-nav__link-text"> Investment Deposit Categories</span>
        </a>
    </li>
</ul>
