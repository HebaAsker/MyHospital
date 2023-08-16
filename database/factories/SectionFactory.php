<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    protected $model=Section::class;
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['قسم المخ والأعصاب','قسم امراض الغدد','قسم امراض القلب','قسم الجراحة','قسم امراض الرئة و الجهاز التنفسي','قسم الباطنة','قسم الأمراض الجلدية','قسم الأمراض النفسية والعصبية','قسم الرمد','قسم النسا والتوليد','قسم الفم والأسنان']),
        ];
    }
}
