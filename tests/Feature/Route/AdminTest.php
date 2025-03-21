<?php

namespace Tests\Feature\Route;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
    

    public function test_role_admin_can_access_admin_dashboard(): void
    {   
    
        $admin = User::factory()->create();
        $admin->role = 'admin';
        $admin->save();
        $response = $this->actingAs($admin)->get('/admin/dashboard');


        $response->assertStatus(200);
    }

    public function test_role_student_can_not_access_admin_dashboard(): void
    {   
    
        $student = User::factory()->create();
    
        $response = $this->actingAs($student)->get('/admin/dashboard');


        $response->assertRedirect('/');
    }

 
}
