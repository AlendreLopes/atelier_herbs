<?php

namespace App\Filament\Herbariums\Resources;

use App\Filament\Herbariums\Resources\HerbsImagesResource\Pages;
use App\Filament\Herbariums\Resources\HerbsImagesResource\RelationManagers;
use App\Models\Herbariums\HerbsImages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HerbsImagesResource extends Resource
{
    protected static ?string $model = HerbsImages::class;

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
            'index' => Pages\ListHerbsImages::route('/'),
            'create' => Pages\CreateHerbsImages::route('/create'),
            'edit' => Pages\EditHerbsImages::route('/{record}/edit'),
        ];
    }
}
