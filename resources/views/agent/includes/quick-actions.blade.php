<ul class="kt-nav">

    <li class="kt-nav__item">
        <a href="{{ route('agent.register.user') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Register User</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('agent.transfer.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Make Transfer</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('agent.saving.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">Save Up Funds</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('agent.deposit.make') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Fixed Deposit</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="{{ route('agent.loan.request') }}" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-console"></i>
            <span class="kt-nav__link-text">Request Loan</span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-brand btn-bold btn-sm" href="{{ route('agent.withdrawal.make') }}">Withdraw Funds</a>
        {{-- <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a> --}}
    </li>
</ul>
