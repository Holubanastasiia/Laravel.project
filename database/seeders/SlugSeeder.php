<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::all()->each(function($category) {
            if (!$category->slug) {
                $slug = Str::slug($category->name);
                $count = Category::where('slug', $slug)->count();
                $original = $slug;
                $i = 1;
                while ($count > 0) {
                    $slug = $original . '-' . $i;
                    $count = Category::where('slug', $slug)->count();
                    $i++;
                }
                $category->slug = $slug;
                $category->save();
            }
        });

        Tag::all()->each(function($tag) {
            if (!$tag->slug) {
                $slug = Str::slug($tag->name);
                $count = Tag::where('slug', $slug)->count();
                $original = $slug;
                $i = 1;
                while ($count > 0) {
                    $slug = $original . '-' . $i;
                    $count = Tag::where('slug', $slug)->count();
                    $i++;
                }
                $tag->slug = $slug;
                $tag->save();
            }
        });

        $this->command->info('Slug для категорій і тегів заповнено ✅');
    }
}
