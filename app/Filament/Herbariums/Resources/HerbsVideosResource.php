<?php

namespace App\Filament\Herbariums\Resources;

use App\Filament\Herbariums\Resources\HerbsVideosResource\Pages;
use App\Filament\Herbariums\Resources\HerbsVideosResource\RelationManagers;
use App\Models\Herbariums\HerbsVideos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HerbsVideosResource extends Resource
{
    protected static ?string $model = HerbsVideos::class;

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
            'index' => Pages\ListHerbsVideos::route('/'),
            'create' => Pages\CreateHerbsVideos::route('/create'),
            'edit' => Pages\EditHerbsVideos::route('/{record}/edit'),
        ];
    }
}
