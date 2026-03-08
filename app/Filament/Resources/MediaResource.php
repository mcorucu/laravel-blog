<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class MediaResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Systems';
    protected static ?string $model = \App\Models\Post::class; // Dummy model for resource basics
    protected static ?string $slug = 'media';
    protected static ?string $navigationLabel = 'Media Library';

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
            ])
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\ImageColumn::make('featured_image')
                        ->square()
                        ->size(150)
                        ->extraAttributes(['class' => 'mx-auto']),
                    Tables\Columns\TextColumn::make('title')
                        ->weight('bold')
                        ->alignCenter()
                        ->searchable(),
                    Tables\Columns\TextColumn::make('featured_image')
                        ->size('xs')
                        ->color('gray')
                        ->alignCenter()
                        ->copyable(),
                ])->space(3),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Change'),
                Tables\Actions\DeleteAction::make()
                    ->label('Delete')
                    ->after(function ($record) {
                        if ($record->featured_image) {
                            \Illuminate\Support\Facades\Storage::disk('public')->delete($record->featured_image);
                        }
                    }),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
        ];
    }
}
