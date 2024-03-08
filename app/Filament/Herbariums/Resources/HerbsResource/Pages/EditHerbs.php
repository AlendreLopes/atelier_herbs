<?php

namespace App\Filament\Herbariums\Resources\HerbsResource\Pages;

use App\Filament\Herbariums\Resources\HerbsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHerbs extends EditRecord
{
    protected static string $resource = HerbsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
