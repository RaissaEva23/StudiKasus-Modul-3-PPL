<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Edit')
                    ->assertPathIs('/notes')
                    ->type('title', 'title')
                    ->type('description', 'description')
                    ->press('UPDATE')
                    ->assertPathIs('/dashboard');
        });
    }
}
