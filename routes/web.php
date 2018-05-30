<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	$this->get('balance/deposit', 'BalanceController@deposit')->name('balance.deposit');
	$this->get('balance', 'BalanceController@index')->name('AdminBalance');

	$this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'SiteController@index')->name('home');

Auth::routes();

