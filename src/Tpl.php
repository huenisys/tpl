<?php

namespace Huenisys\Tpl;

class Tpl
{
    protected $router;

    public function __construct($app)
    {
        $this->router = $app->router;
    }

    public function registerAuthRoutes()
    {
        $this->router->group(['middleware' => ['web'], 'namespace' => 'Huenisys\Tpl\Http\Controllers'], function(){

            // Authentication Routes...
            $this->router->get('login', 'Auth\LoginController@showLoginForm')->name('login');
            $this->router->post('login', 'Auth\LoginController@login');
            $this->router->post('logout', 'Auth\LoginController@logout')->name('logout');

            // Registration Routes...
            $this->router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            $this->router->post('register', 'Auth\RegisterController@register');

            // Password Reset Routes...
            $this->router->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            $this->router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            $this->router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            $this->router->post('password/reset', 'Auth\ResetPasswordController@reset');
        });

    }

    public function display()
    {
        return 'message returned from display';
    }

}