<?php

namespace App\Http\Repositories\Section\Impl;

use App\Http\Repositories\Section\SectionRepository;
use App\Models\Section;

class SectionRepositoryImpl implements SectionRepository
{

    /**
     * @param array $data
     * @param null $slug
     * @return Section
     */
    public function save(array $data, $slug = null): Section
    {
        if(isset($slug)){
            return Section::updateOrCreate(['slug' => $slug], $data);
        } else {
            return Section::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }

    /**
     * @param string $slug
     * @return Section
     */
    public function getBySlug(string $slug): Section
    {
        return Section::where('slug', $slug)->firstOrFail();
    }
}