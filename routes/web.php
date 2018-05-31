<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'admin', 'prefix' => 'admin'], function(){

	$this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm-transfer');

	$this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');

	$this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
	$this->get('admin/balance/withdraw', 'BalanceController@withdraw')->name('balance.withdraw');

	$this->post('deposit', 'BalanceController@DepositStore')->name('deposit.store');
	$this->get('admin/balance/deposit', 'BalanceController@deposit')->name('balance.deposit');
	$this->get('balance', 'BalanceController@index')->name('AdminBalance');

	$this->get('/', 'AdminController@index')->name('admin.home');

});

	$this->get('/', 'Site\SiteController@index')->name('home');

	Auth::routes();

