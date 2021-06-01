<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *@test
     * @return void
     */

    public function test_Register()
    {
        $this->browse(function (Browser $browser) {
                    $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name', 'Admin')
                    ->type('email', 'bachurahul@gmail.com')
                    ->type('password', '123456789')
                    ->type('password_confirmation', '123456789')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Dashboard')
                    ->assertAuthenticated();
        });
    }
    
   public function test_login()
    {
        $this->browse(function (Browser $browser) {
              $browser->visit('/login')
                    ->assertSee('Login')
                    ->type('email', 'bachurahul@gmail.com')
                    ->type('password', '123456789')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Dashboard')
                    ->assertAuthenticated();
        });
    }

    
}
