<?php

namespace App\Filament\Herbariums\Resources\HerbsTipsResource\Pages;

use App\Filament\Herbariums\Resources\HerbsTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHerbsTips extends ListRecords
{
    protected static string $resource = HerbsTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
