<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_home_page_is_available(): void
    {
        $this->get(route('home'))->assertOk();
    }

    public function test_about_page_is_available(): void
    {
        $this->get(route('about'))->assertOk();
    }

    public function test_contacts_page_renders_dynamic_contacts(): void
    {
        $this->get(route('contacts'))
            ->assertOk()
            ->assertSee('ululul2000@mail.ru')
            ->assertSee('Данилова Ульяна Сергеевна');
    }
}
