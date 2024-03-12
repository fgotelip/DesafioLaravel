<?php

namespace Tests\Unit;

use App\Http\Controllers\DoctorController;
use PHPUnit\Framework\TestCase;
use App\Models\Specialty;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreDoctorRequest;

class DoctorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testCreateDoctor(StoreDoctorRequest $request): void
    {
        $data = $request->validated();

        $doctor = new DoctorController();
            $name = $data['name'] = fake()->name();
            $email = $data['email'] = fake()->unique()->safeEmail();
            $password = $data['password'] = Hash::make('1234567890');
            $wasbornat = $data['wasbornat'] = fake()->date($format = 'Y-m-d', $max = 'now');
            $address = $data['address'] = fake()->address();
            $tell = $data['tell'] = fake()->phonenumber();
            $cpf = $data['cpf'] = fake()->unique()->numerify('###############');
            $workhours = $data['workhours'] = fake()->randomElement([
                'diurno',
                'noturno',
                'integral',
            ]);
            $crm = $data['crm'] = fake()->unique()->numerify('######');
            $pic = $data['pic'] = fake()->text();
            $specialty_id = $data['specialty_id'] = Specialty::inRandomOrder()->first()->id;

            $newDoctor = $doctor->store($data);
    }
}
