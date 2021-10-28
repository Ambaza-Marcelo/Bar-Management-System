<?php

//les routes qui ne neccessitent pas l'authentification
Route::get('/', 'WelcomeController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('user/config/change_password', 'UserController@changePasswordGet');
    Route::post('user/config/change_password', 'UserController@changePasswordPost');
});

Route::middleware(['auth', 'admin'])->group(function () {
   
   //les routes pour la gestion des depenses
   Route::get('depenses','ExpenseController@index')->name('depenses');
   Route::get('creer-depenses','ExpenseController@create')->name('creer-depenses');
   Route::get('editer-depense/{id}','ExpenseController@edit')->name('editer-depense');
   Route::post('enregistrer-depenses','ExpenseController@store')->name('enregistrer-depenses');
   Route::put('modifier-depenses/{id}','ExpenseController@update')->name('modifier-depenses');
   Route::delete('supprimer-depenses/{id}','ExpenseController@destroy')->name('supprimer-depenses');

   //les routes pour la gestion des rapports
   Route::get('rapports','ReportController@index')->name('rapports');
   Route::get('creer-rapport','ReportController@create')->name('creer-rapport');
   Route::get('editer-rapport/{id}','ReportController@edit')->name('editer-rapport');
   Route::post('enregistrer-rapport','ReportController@store')->name('enregistrer-rapport');
   Route::put('modifier-rapport/{id}','ReportController@update')->name('modifier-rapport');
   Route::delete('supprimer-rapport/{id}','ReportController@destroy')->name('supprimer-rapport');


   //les routes pour la gestion des employees
   Route::get('employes','EmployeeController@index')->name('employes');
   Route::get('creer-employe','EmployeeController@create')->name('creer-employe');
   Route::get('editer-employe/{id}','EmployeeController@edit')->name('editer-employe');
   Route::post('enregistrer-employe','EmployeeController@store')->name('enregistrer-employe');
   Route::put('modifier-employe/{id}','EmployeeController@update')->name('modifier-employe');
   Route::delete('supprimer-employe/{id}','EmployeeController@destroy')->name('supprimer-employe');

   //les routes pour la gestion des services
   Route::get('services','ServiceController@index')->name('services');
   Route::get('creer-service','ServiceController@create')->name('creer-service');
   Route::get('editer-service/{id}','ServiceController@edit')->name('editer-service');
   Route::post('enregistrer-service','ServiceController@store')->name('enregistrer-service');
   Route::put('modifier-service/{id}','ServiceController@update')->name('modifier-service');
   Route::delete('supprimer-service/{id}','ServiceController@destroy')->name('supprimer-service');


   //les routes pour la gestion des adresses
   Route::get('adresses','AdresseController@index')->name('adresses');
   Route::get('creer-adresse','AdresseController@create')->name('creer-adresse');
   Route::get('editer-adresse/{id}','AdresseController@edit')->name('editer-adresse');
   Route::post('enregistrer-adresse','AdresseController@store')->name('enregistrer-adresse');
   Route::put('modifier-adresse/{id}','AdresseController@update')->name('modifier-adresse');
   Route::delete('supprimer-adresse/{id}','AdresseController@destroy')->name('supprimer-adresse');
  
});


//auth employee
Route::middleware(['auth', 'employee'])->group(function () {
    
    
});

Route::prefix('emails')->group(function () {
    // Welcome Email
    Route::get('/welcome', function () {
        $user = App\User::find(1);
        $password = 'martial';

        return new App\Mail\SendWelcomeEmailToUser($user, $password);
    });
});

