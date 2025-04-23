<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DisplayNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group DisplayTest 
     */
    public function testExample(): void
    {
        $note = 1;

        $this->browse(function (Browser $browser) use ($note) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard')
            
                    ->visit('/notes')
                    ->visit('/note/'.$note);
        });
    }
}
