<ul class="kt-nav">

    <li class="kt-nav__item">
        <a href="{{ route('user.transfer.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Make Transfer</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('user.saving.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">Save Up Funds</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('user.deposit.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Fixed Deposit</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('user.loan.request') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-console"></i>
            <span class="kt-nav__link-text">Request Loan</span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-brand btn-bold btn-sm" href="{{ route('user.withdrawal.make') }}">Withdraw Funds</a>
        {{-- <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a> --}}
    </li>
</ul>
