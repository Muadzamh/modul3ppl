<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DaptarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Daptar
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'ajam')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('REGISTER')
                    ->assertPathIs('/dashboard');
        });
    }
}
