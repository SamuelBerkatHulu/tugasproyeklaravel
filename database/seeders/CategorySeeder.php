<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    Category::create([
      'name' => 'Web Design',
      'slug' => 'web-design',
      'color' => 'red'
    ]);

    Category::create([
      'name' => 'UI UX',
      'slug' => 'ui-ux',
      'color' => 'green'
    ]);

    Category::create([
      'name' => 'Machine Learning',
      'slug' => 'machine-learning',
      'color' => 'blue'
    ]);

    Category::create([
      'name' => 'Data Science',
      'slug' => 'data-science',
      'color' => 'yellow'
    ]);

    Category::create([
      'name' => 'Artificial Intelligence',
      'slug' => 'artificial-intelligence',
      'color' => 'purple'
    ]);

    Category::create([
      'name' => 'Cyber Security',
      'slug' => 'cyber-security',
      'color' => 'orange'
    ]);
  }
}
