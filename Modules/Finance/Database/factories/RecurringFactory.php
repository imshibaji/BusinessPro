<?php
namespace Modules\Finance\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecurringFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Finance\Entities\Recurring::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

