<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('verification/notice', 'Agent\Auth\VerificationController@index')->name('verification.notice');

Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('user.login');
Route::post('login', 'User\Auth\LoginController@login')->name('user.post.login');

Route::post('logout', 'User\Auth\LoginController@logout')->name('user.logout');

Route::post('register', 'User\Auth\RegisterController@register')->name('user.post.register');
Route::get('register', 'User\Auth\RegisterController@showRegistrationForm')->name('user.register');

Route::get('dashboard', 'User\DashboardController@index')->name('user.dashboard');

Route::get('transfers', 'User\TransferController@index')->name('user.transfers');
Route::get('transfer/make', 'User\TransferController@makeTransferPage')->name('user.transfer.make');
Route::post('transfer/make', 'User\TransferController@makeTransfer')->name('user.post.transfer.make');

Route::get('withdrawals', 'User\WithdrawalController@index')->name('user.withdrawals');
Route::get('withdrawal/make', 'User\WithdrawalController@makeWithdrawalPage')->name('user.withdrawal.make');
Route::post('withdrawal/make', 'User\WithdrawalController@makewithdrawal')->name('user.post.withdrawal.make');

Route::get('deposits', 'User\DepositController@index')->name('user.deposits');
Route::get('deposit/make', 'User\DepositController@makeDepositPage')->name('user.deposit.make');
Route::post('deposit/make', 'User\DepositController@makeDeposit')->name('user.post.deposit.make');

Route::get('savings', 'User\SavingsController@index')->name('user.savings');
Route::get('savings/make', 'User\SavingsController@makeSavingsPage')->name('user.saving.make');
Route::post('savings/make', 'User\SavingsController@makeSaving')->name('user.post.saving.make');

Route::get('loans', 'User\LoansController@index')->name('user.loans');
Route::get('loan/request', 'User\LoansController@requestLoansPage')->name('user.loan.request');
Route::post('loan/request', 'User\LoansController@requestLoan')->name('user.post.loan.request');

Route::get('tickets', 'User\TicketController@index')->name('user.tickets');
Route::get('ticket/create', 'User\TicketController@createTicketPage')->name('user.ticket.create');
Route::post('ticket/create', 'User\TicketController@createTicket')->name('user.post.ticket.create');

Route::get('transactions', 'User\TransactionsController@index')->name('user.transactions');

Route::get('wallet/fund', 'User\WalletController@fundWalletPage')->name('user.wallet.fund');
Route::post('wallet/fund', 'HomeController@fundWallet')->name('user.post.wallet.fund');

Route::get('get-otp', 'User\WalletController@getOTP')->name('user.get-otp');
Route::get('account/name', 'User\TransferController@getAccountName')->name('account-name.get');
// Route::get('funds/withdraw', 'User\WithdrawController@getWithdrawPage')->name('user.withdraw.funds');





Route::group(['prefix' => 'admin/kobonest'], function () {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.post.login');

    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('loans', 'Admin\LoansController@index')->name('admin.loans');
    Route::get('loan/{id}', 'Admin\LoansController@view')->name('admin.loan.view');
    Route::post('loan/confirm', 'Admin\LoansController@loanConfirm')->name('admin.loan.confirm');

    Route::get('deposits', 'Admin\DepositController@index')->name('admin.deposits');
    Route::get('deposit/categories', 'Admin\DepositController@depositCategoryPage')->name('admin.deposit.category');
    Route::get('deposit/categories/add', 'Admin\DepositController@addCategoryPage')->name('admin.deposit.category.add');
    Route::post('deposit/categories/add', 'Admin\DepositController@postDepositCategory')->name('admin.deposit.category.add.post');

    Route::get('savings', 'Admin\SavingsController@index')->name('admin.savings');
    Route::get('saving/categories', 'Admin\SavingsController@categoryPage')->name('admin.saving.category');
    Route::get('saving/categories/add', 'Admin\SavingsController@addCategoryPage')->name('admin.saving.category.add');
    Route::post('saving/categories/add', 'Admin\SavingsController@postSavingCategory')->name('admin.saving.category.add.post');

    Route::get('withdrawals', 'Admin\WithdrawalController@index')->name('admin.withdrawals');
    Route::get('transfers', 'Admin\TransferController@index')->name('admin.transfers');

    Route::get('transactions', 'Admin\TransactionController@index')->name('admin.transactions');

    Route::get('tickets', 'Admin\TicketController@index')->name('admin.tickets');
    Route::get('ticket/{id}', 'Admin\TicketController@view')->name('admin.ticket.view');

    Route::get('users', 'Admin\UsersController@index')->name('admin.users');
    // Route::get('user/{id}', 'Admin\UsersController@view')->name('admin.users.view');
    Route::get('user/{id}/edit', 'Admin\UsersController@edit')->name('admin.users.edit');
    Route::get('user/create', 'Admin\UsersController@createUser')->name('admin.users.create');
    Route::post('user/create', 'Admin\UsersController@postCreateUser')->name('admin.users.create.post');

    Route::get('agents', 'Admin\UsersController@agentIndex')->name('admin.agents');
    // Route::get('agent/{id}', 'Admin\UsersController@viewAgent')->name('admin.agents.view');
    Route::get('agent/{id}/edit', 'Admin\UsersController@editAgent')->name('admin.agents.edit');
    Route::get('agent/create', 'Admin\UsersController@createAgent')->name('admin.agents.create');
    Route::post('agent/create', 'Admin\UsersController@postCreateAgent')->name('admin.agents.create.post');



});


Route::group(['prefix' => 'agent'], function () {
    Route::get('login', 'Agent\Auth\LoginController@showLoginForm')->name('agent.login');
    Route::post('login', 'Agent\Auth\LoginController@login')->name('agent.post.login');

    Route::post('register', 'Agent\Auth\RegisterController@register')->name('agent.post.register');
    Route::get('register', 'Agent\Auth\RegisterController@showRegistrationForm')->name('agent.register');

    Route::group(['middleware' => ['verified']], function () {
        Route::get('dashboard', 'Agent\DashboardController@index')->name('agent.dashboard');

        Route::get('users', 'Agent\UserController@index')->name('agent.users');
        Route::get('register/users', 'Agent\UserController@RegisterUserPage')->name('agent.register.user');
        Route::post('register/users', 'Agent\UserController@registerUser')->name('agent.post.register.user');

        Route::get('transfers', 'Agent\TransferController@index')->name('agent.transfers');
        Route::get('transfer/make', 'Agent\TransferController@makeTransferPage')->name('agent.transfer.make');
        Route::post('transfer/make', 'User\TransferController@makeTransfer')->name('agent.post.transfer.make');

        Route::get('withdrawals', 'Agent\WithdrawalController@index')->name('agent.withdrawals');
        Route::get('withdrawal/make', 'Agent\WithdrawalController@makeWithdrawalPage')->name('agent.withdrawal.make');
        Route::post('withdrawal/make', 'Agent\WithdrawalController@makewithdrawal')->name('agent.post.withdrawal.make');

        Route::get('deposits', 'Agent\DepositController@index')->name('agent.deposits');
        Route::get('deposit/make', 'Agent\DepositController@makeDepositPage')->name('agent.deposit.make');
        Route::post('deposit/make', 'Agent\DepositController@makeDeposit')->name('agent.post.deposit.make');

        Route::get('savings', 'Agent\SavingsController@index')->name('agent.savings');
        Route::get('savings/make', 'Agent\SavingsController@makeSavingsPage')->name('agent.saving.make');
        Route::post('savings/make', 'Agent\SavingsController@makeSaving')->name('agent.post.saving.make');

        Route::get('loans', 'Agent\LoansController@index')->name('agent.loans');
        Route::get('loan/request', 'Agent\LoansController@requestLoansPage')->name('agent.loan.request');
        Route::post('loan/request', 'Agent\LoansController@requestLoan')->name('agent.post.loan.request');

        Route::get('transactions', 'Agent\TransactionsController@index')->name('agent.transactions');

        Route::get('wallet/fund', 'Agent\WalletController@fundWalletPage')->name('agent.wallet.fund');
        Route::post('wallet/fund', 'HomeController@fundWallet')->name('agent.post.wallet.fund');


    });

});
