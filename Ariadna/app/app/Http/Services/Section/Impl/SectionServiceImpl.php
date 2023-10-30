<?php

namespace App\Http\Services\Section\Impl;

use App\Http\DataTransferObjects\SaveSectionData;
use App\Http\Repositories\Section\SectionRepository;
use App\Http\Services\Section\SectionService;
use App\Models\Section;
use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Str as Str;

class SectionServiceImpl implements SectionService
{
    public function __construct(
        protected SectionRepository $sectionRepository
    )
    {
    }

    /**
     * @param SaveSectionData $saveSectionData
     * @return Section
     */
    public function save(SaveSectionData $saveSectionData, $slug): Section
    {
        $payload = [
            'title' => $saveSectionData->title,
            'description' => $saveSectionData->description,
            'slug' => Str::slug($saveSectionData->title)
        ];
        return $this->sectionRepository->save($payload,$slug);
    }

    /**
     * @param string $slug
     * @return Section
     */
    public function getBySlug(string $slug): Section
    {
        return $this->sectionRepository->getBySlug($slug);
    }
}