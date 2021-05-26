<?php

namespace Database\Factories;

use App\Models\AcademicProgramCurriculumSubjects;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicProgramCurriculumSubjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcademicProgramCurriculumSubjects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'academic_program_id' => $this->faker->word,
        'curriculum_subject_id' => $this->faker->word
        ];
    }
}
