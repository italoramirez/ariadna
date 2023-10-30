<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Http\DataTransferObjects\SaveSectionData;
use App\Http\Services\Section\SectionService;
use App\Models\Section;
use Illuminate\Http\Request;


class SectionController extends Controller
{

    /**
     * @param SectionService $sectionService
     */
    public function __construct(
        protected SectionService $sectionService
    )
    {
    }

    /**
     * @param Request $request
     * @param null $slug
     * @return Section|mixed
     */
    public function save(Request $request, $slug = null)
    {
       return $this->sectionService->save(SaveSectionData::from($request), $slug);
    }

    /**
     * @param string $slug
     * @return Section
     */
    public function getBySlug(string $slug)
    {
        return $this->sectionService->getBySlug($slug);
    }
}
