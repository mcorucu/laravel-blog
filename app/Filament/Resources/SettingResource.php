<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Systems';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->disabled(),
                Forms\Components\TextInput::make('group')
                    ->required()
                    ->disabled(),
                Forms\Components\Section::make('Setting Value')
                    ->schema([
                        Forms\Components\FileUpload::make('value')
                            ->label('Upload Asset')
                            ->image()
                            ->maxSize(35840)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml', 'image/x-icon'])
                            ->directory('site/branding')
                            ->preserveFilenames()
                            ->visible(fn ($get) => in_array($get('key'), ['logo', 'favicon']))
                            ->saveUploadedFileUsing(function (Forms\Components\FileUpload $component, \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file): string {
                                $extension = $file->getClientOriginalExtension();
                                $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                                
                                if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'ico'])) {
                                    $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                                    $image = $manager->read($file->getRealPath());
                                    $encoded = $image->toWebp(80);
                                    
                                    $finalName = "{$filename}.webp";
                                    $fullPath = "{$component->getDirectory()}/{$finalName}";
                                    \Illuminate\Support\Facades\Storage::disk($component->getDiskName())->put(
                                        $fullPath,
                                        (string) $encoded
                                    );
                                    return $fullPath;
                                }

                                return $file->storeAs($component->getDirectory(), $file->getClientOriginalName(), $component->getDiskName());
                            }),
                        
                        Forms\Components\Textarea::make('value')
                            ->label('Text Value')
                            ->required()
                            ->columnSpanFull()
                            ->hidden(fn ($get) => in_array($get('key'), ['logo', 'favicon'])),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')->searchable(),
                Tables\Columns\TextColumn::make('group')->badge(),
                Tables\Columns\TextColumn::make('value')->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
