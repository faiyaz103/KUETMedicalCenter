<?php

namespace Tests\Feature\Route;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     use RefreshDatabase;
        
    public function test_role_student_can_access_blood_bank_page(): void
    {   
      
        $student = User::factory()->create();
       
        $response = $this->actingAs($student)->get('/blood-bank');


        $response->assertStatus(200);
    }

    public function test_role_student_can_access_blood_donors_list(): void
    {   
      
        $student = User::factory()->create();

        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];

        foreach($bloodTypes as $bloodType){
            $response = $this->actingAs($student)->get('/blood-bank/donors/{$bloodtype}');
            $response->assertStatus(200);
        }
    }

    // public function test_role_student_can_send_feedback(): void
    // {

    //     $student = User::factory()->create();

    //     $feedbackData = [
    //         'message' => 'This is a test feedback message.',
    //     ];

    //     $response = $this->actingAs($student)->post(route('feedback.store'), $feedbackData);

    //     $this->assertDatabaseHas('feedback', [
    //         'name' => $student->name,
    //         'email' => $student->email,
    //         'message' => $feedbackData['message'],
    //     ]);

    //     $response->assertRedirect('/');
    // }

    public function test_role_admin_can_not_access_blood_bank_page(): void
    {   
      
        $student = User::factory()->create();
        $student->role = 'admin';
        $student->save();
        $response = $this->actingAs($student)->get('/blood-bank');


        $response->assertRedirect('/');
    }

    public function test_role_admin_can_not_access_blood_donors_list(): void
    {   
      
        $student = User::factory()->create();
        $student->role = 'admin';
        $student->save();
        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'];

        foreach($bloodTypes as $bloodType){
            $response = $this->actingAs($student)->get('/blood-bank/donors/{$bloodtype}');
            $response->assertRedirect('/');
        }
    }

    // public function test_role_admin_can_not_send_feedback(): void
    // {

    //     $student = User::factory()->create();
    //     $student->role = 'admin';
    //     $student->save();
    //     $feedbackData = [
    //         'message' => 'This is a test feedback message.',
    //     ];

    //     $response = $this->actingAs($student)->post(route('feedback.store'), $feedbackData);

    //     $this->assertDatabaseMissing('feedback', [
    //         'name' => $student->name,
    //         'email' => $student->email,
    //         'message' => $feedbackData['message'],
    //     ]);

    //     $response->assertRedirect('/');
    // }
    

}
