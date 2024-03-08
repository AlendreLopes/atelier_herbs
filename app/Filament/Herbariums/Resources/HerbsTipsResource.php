<?php

namespace App\Filament\Herbariums\Resources;

use App\Filament\Herbariums\Resources\HerbsTipsResource\Pages;
use App\Filament\Herbariums\Resources\HerbsTipsResource\RelationManagers;
use App\Models\Herbariums\HerbsTips;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HerbsTipsResource extends Resource
{
    protected static ?string $model = HerbsTips::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHerbsTips::route('/'),
            'create' => Pages\CreateHerbsTips::route('/create'),
            'edit' => Pages\EditHerbsTips::route('/{record}/edit'),
        ];
    }
}
