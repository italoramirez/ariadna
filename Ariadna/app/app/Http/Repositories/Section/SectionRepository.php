<?php

namespace App\Http\Repositories\Section;

use App\Models\Section;

interface SectionRepository
{
    /**
     * @param array $data
     * @return Section
     */
    public function save(array $data): Section;

    /**
     * @param string $slug
     * @return Section
     */
    public function getBySlug(string $slug): Section;
}