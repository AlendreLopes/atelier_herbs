<?php

namespace App\Filament\Herbariums\Resources\HerbsResource\Pages;

use App\Filament\Herbariums\Resources\HerbsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHerbs extends ListRecords
{
    protected static string $resource = HerbsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
