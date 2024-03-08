<?php

namespace App\Filament\Herbariums\Resources\HerbsImagesResource\Pages;

use App\Filament\Herbariums\Resources\HerbsImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHerbsImages extends EditRecord
{
    protected static string $resource = HerbsImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
