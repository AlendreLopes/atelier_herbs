<?php

namespace App\Filament\Rosemary\Resources\PatientsResource\Pages;

use App\Filament\Rosemary\Resources\PatientsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatients extends EditRecord
{
    protected static string $resource = PatientsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
