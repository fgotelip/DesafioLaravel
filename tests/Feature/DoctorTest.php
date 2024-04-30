<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class DoctorTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_read_all_doctor_informations(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $doctor = Doctor::factory()->create();

        $response =  $this->get('/medicos');

        $response->assertSee($doctor->name);
    }

    /** @test */
    public function authenticated_users_can_create_a_new_doctor()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $doctor = Doctor::factory()->make();

        $this->post('/medicos', $doctor->toArray());

        $this->assertEquals(Doctor::all()->count(), 1);
    }

     /** @test */
     public function unauthenticated_users_can_create_a_new_doctor()
     {
         $doctor = Doctor::factory()->make();

         $this->post('/medicos', $doctor->toArray())->assertRedirect('/login');
     }

    /** @test */
    public function authorized_user_can_update_the_doctor(){
        $this->actingAs(User::factory()->create());

        $doctor = Doctor::factory()->create();

        $doctor->name = "Updated Name";

        $this->put('/admin/'.$doctor->id, $doctor->toArray());

        $this->assertDatabaseHas('doctors', ['id' => $doctor->id, 'name' => 'Updated Name']);


    }
}
