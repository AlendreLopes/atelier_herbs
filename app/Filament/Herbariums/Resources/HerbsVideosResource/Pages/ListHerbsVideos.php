<?php

namespace App\Filament\Herbariums\Resources\HerbsVideosResource\Pages;

use App\Filament\Herbariums\Resources\HerbsVideosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHerbsVideos extends ListRecords
{
    protected static string $resource = HerbsVideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
