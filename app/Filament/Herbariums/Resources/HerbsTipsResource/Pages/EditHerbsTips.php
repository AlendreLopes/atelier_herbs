<?php

namespace App\Filament\Herbariums\Resources\HerbsTipsResource\Pages;

use App\Filament\Herbariums\Resources\HerbsTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHerbsTips extends EditRecord
{
    protected static string $resource = HerbsTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
