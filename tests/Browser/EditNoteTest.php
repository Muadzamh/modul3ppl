<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group EditNote
     */
    public function testExample(): void
    {
        $note = 6;

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
                    ->visit('/note/'.$note)
                    ->clickLink('Edit')
                    ->type('title', 'edit6woy')
                    ->type('description', 'wayawwwwwwwww')
                    ->press('UPDATE')
                    ->assertSee('ajam');
        });
    }
}
