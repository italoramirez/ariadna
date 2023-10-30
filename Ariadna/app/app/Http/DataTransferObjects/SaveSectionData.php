<?php

namespace App\Http\DataTransferObjects;

use Spatie\LaravelData\Data;

class SaveSectionData extends Data
{

    public function __construct(
        public string $title,
        public ?string $slug,
        public string $description,
    )
    {
    }

    /**
     * @return string[]
     */
    public static function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
        ];
    }
}