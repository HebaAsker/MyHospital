<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;


class DoctorFactory extends Factory
{


    protected $model = Doctor::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'appointments' => fake()->randomElement(['السبت','الاحد','الاثنين','الثلاثاء','الاربعاء','الخميس']),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => fake()->phoneNumber(),
            'price' => fake()->randomElement([100,3000,500,1000]),
            'section_id' => Section::all()->random()->id,
        ];
    }
}
