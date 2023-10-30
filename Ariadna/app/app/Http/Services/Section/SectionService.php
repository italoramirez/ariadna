<?php

namespace App\Http\Services\Section;

use App\Http\DataTransferObjects\SaveSectionData;
use App\Models\Section;

interface SectionService
{
    /**
     * @param SaveSectionData $saveSectionData
     * @param $slug
     * @return mixed
     */
    public function save(SaveSectionData $saveSectionData, $slug): Section;

    /**
     * @param string $slug
     * @return Section
     */
    public function getBySlug(string $slug): Section;
}