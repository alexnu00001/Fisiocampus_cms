<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'subtitle' => $this->faker->word,
        'field' => $this->faker->word,
        'category' => $this->faker->word,
        'location' => $this->faker->word,
        'type' => $this->faker->word,
        'classroom_category' => $this->faker->word,
        'video_preview' => $this->faker->word,
        'course_description_and_temary' => $this->faker->text,
        'faq' => $this->faker->text,
        'learning_objectives' => $this->faker->text,
        'methodology' => $this->faker->text,
        'syllabus' => $this->faker->text,
        'contact_info' => $this->faker->text,
        'address' => $this->faker->text,
        'schedule' => $this->faker->text,
        'start_time' => $this->faker->word,
        'end_time' => $this->faker->word,
        'start_date' => $this->faker->word,
        'end_date' => $this->faker->word,
        'seats_available' => $this->faker->randomDigitNotNull,
        'price' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
