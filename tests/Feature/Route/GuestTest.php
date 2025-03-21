<?php

namespace Tests\Feature\Route;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_guest_can_view_the_homepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Doctors page
    public function test_guest_can_view_the_doctors_page(): void
    {
        $response = $this->get('/doctors');

        $response->assertStatus(200);
    }

    // staff
    public function test_guest_can_view_the_staff_page(): void
    {
        $response = $this->get('/staff');

        $response->assertStatus(200);
    }

    // facilities
    public function test_guest_can_view_the_facilities_page(): void
    {
        $response = $this->get('/facilities');

        $response->assertStatus(200);
    }

    // doctors-schedule
    public function test_guest_can_view_the_doctors_schedule_page(): void
    {
        $response = $this->get('/doctors-schedule');

        $response->assertStatus(200);
    }

    // services
    public function test_guest_can_view_the_services_page(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    // notices
    public function test_guest_can_view_the_notice_board_page(): void
    {
        $response = $this->get('/notices');

        $response->assertStatus(200);
    }

    // contact
    public function test_guest_can_view_the_contact_us_page(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    // Guest can't provide feedback & complaint
    public function test_guest_can_not_provide_feedback_and_complaint(): void
    {
        $response = $this->post('/feedback');

        $response->assertRedirect('/login');
    }

    public function test_guest_can_not_access_blood_bank_page(): void
    {
        $response = $this->get('/blood-bank');

        $response->assertRedirect('/login');
    }
}
