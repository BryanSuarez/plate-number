<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CitizenCanDriveHisCarTest extends TestCase
{

    /**
     * User can visit the page that
     * display info.
     * @test
     * @return void
     */
    public function an_user_can_visit_page()
    {
        $response = $this->get('plate');
        $response->assertStatus(200)
            ->assertSee('Pico y Placa');
    }

    /**
     * Fields are not empty
     * @test
     * @return void
     */
    public function an_user_can_not_send_form_with_empty_fields()
    {
        //user should pass data
        $response = $this->post(route('plate'), [
            'plate' => 'PAA4271',
            'date' => 'Monday',
            'time' => '08:00'
        ]);

        //data has benn processed
        $response->assertStatus(200);
    }

    /**
     * Fields are  empty
     * @test
     * @return void
     */
    public function an_user_pass_form_with_empty_fields()
    {
        //user does not pass data
        $response = $this->post(route('plate'), [
            'plate' => '',
            'date' => '',
            'time' => ''
        ]);

        //data has benn processed
        $response->assertStatus(302);
    }
}
