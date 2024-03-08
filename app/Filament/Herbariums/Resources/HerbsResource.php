<?php

namespace App\Filament\Herbariums\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use App\Models\Herbariums\Herbs;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Herbariums\Resources\HerbsResource\Pages;
use App\Filament\Herbariums\Resources\HerbsResource\RelationManagers;

class HerbsResource extends Resource
{
    protected static ?string $model = Herbs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('herbs_types_id')
                    ->label('Type')
                    ->relationship('herbs_type', 'title')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('title')
                            ->placeholder('Herb title')
                            ->maxLength(155),
                        Hidden::make('user_id')
                            ->default(Auth::id())
                    ])
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title_commom')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tittle_scientific')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'underline',
                        'undo',
                    ])
                    ->required()
                    ->maxLength(500),
                Textarea::make('notes')
                    ->cols(5)
                    ->rows(10)
                    ->required()
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('herbs_type.title')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('title_common'),
                TextColumn::make('title_scientific')
                    ->searchable(),
                TextColumn::make('description'),
                TextColumn::make('notes'),
                TextColumn::make('user_id'),
            ])
            ->filters([
                //
                SelectFilter::make('herbs_types_id')
                    ->relationship('herbs_type', 'title')
                // ->options([
                //     '1' => 'Cold',
                //     '2' => 'Warm',
                //     '3' => 'Hot',
                // ])
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
            'index' => Pages\ListHerbs::route('/'),
            'create' => Pages\CreateHerbs::route('/create'),
            'edit' => Pages\EditHerbs::route('/{record}/edit'),
        ];
    }
}
