<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Editorial';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Content')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', str($state)->slug())),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                Forms\Components\Textarea::make('excerpt')
                                    ->required()
                                    ->rows(3),
                                Forms\Components\RichEditor::make('body')
                                    ->required()
                                    ->fileAttachmentsDirectory('posts/images')
                                    ->fileAttachmentsVisibility('public')
                                    ->saveUploadedFileAttachmentsUsing(function ($file, Forms\Components\RichEditor $component) {
                                        // 35MB check for attachments too
                                        if ($file->getSize() > 35 * 1024 * 1024) {
                                            throw new \Exception('Attachment exceeds 35MB limit.');
                                        }

                                        $extension = $file->getClientOriginalExtension();
                                        $title = $component->getLivewire()->data['title'] ?? 'post';
                                        $slug = \Illuminate\Support\Str::slug($title);
                                        $timestamp = time();
                                        $filename = "{$slug}-{$timestamp}";
                                        
                                        if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png'])) {
                                            $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                                            $image = $manager->read($file->getRealPath());
                                            $encoded = $image->toWebp(80);
                                            
                                            $finalName = "posts/images/{$filename}.webp";
                                            \Illuminate\Support\Facades\Storage::disk('public')->put($finalName, (string) $encoded);
                                            return \Illuminate\Support\Facades\Storage::disk('public')->url($finalName);
                                        }

                                        $path = $file->store('posts/images', 'public');
                                        return \Illuminate\Support\Facades\Storage::disk('public')->url($path);
                                    })
                                    ->columnSpanFull(),
                            ]),
                        
                        Forms\Components\Section::make('SEO Metadata')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->placeholder('Defaults to post title'),
                                Forms\Components\Textarea::make('meta_description')
                                    ->rows(3),
                            ])->collapsed(),
                    ])->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Status & Category')
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->required(),
                                Forms\Components\TextInput::make('author_name')
                                    ->default('MN Editorial'),
                                Forms\Components\DateTimePicker::make('published_at'),
                            ]),

                        Forms\Components\Section::make('Visuals')
                            ->schema([
                                Forms\Components\FileUpload::make('featured_image')
                                    ->image()
                                    ->maxSize(35840)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
                                    ->visibility('public')
                                    ->imageEditor()
                                    ->openable()
                                    ->downloadable()
                                    ->deletable()
                                    ->saveUploadedFileUsing(function (Forms\Components\FileUpload $component, \Livewire\Features\SupportFileUploads\TemporaryUploadedFile $file): string {
                                        $extension = $file->getClientOriginalExtension();
                                        $title = $component->getLivewire()->data['title'] ?? 'post';
                                        $slug = \Illuminate\Support\Str::slug($title);
                                        $timestamp = time();
                                        $filename = "{$slug}-{$timestamp}";
                                        
                                        $directory = 'posts/covers';
                                        
                                        if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png'])) {
                                            $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
                                            $image = $manager->read($file->getRealPath());
                                            $encoded = $image->toWebp(80);
                                            
                                            $finalName = "{$filename}.webp";
                                            $fullPath = "{$directory}/{$finalName}";
                                            \Illuminate\Support\Facades\Storage::disk('public')->put(
                                                $fullPath,
                                                (string) $encoded
                                            );
                                            return $fullPath;
                                        }

                                        // Fallback for SVG or other allowed types
                                        return $file->storeAs($directory, "{$filename}.{$extension}", 'public');
                                    }),
                                Forms\Components\TextInput::make('featured_svg')
                                    ->helperText('Legacy illustration support'),
                            ]),
                    ])->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::class::make('title')->searchable()->limit(30),
                Tables\Columns\TextColumn::make('featured_image')
                    ->label('Image Link')
                    ->formatStateUsing(fn ($state) => $state ? '🔗 Open' : '—')
                    ->url(fn ($state) => $state ? \Illuminate\Support\Facades\Storage::disk('public')->url($state) : null)
                    ->openUrlInNewTab()
                    ->color('primary'),
                Tables\Columns\TextColumn::class::make('category.name'),
                Tables\Columns\TextColumn::class::make('author_name'),
                Tables\Columns\TextColumn::class::make('published_at')->dateTime()->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::class::make(),
                Tables\Actions\DeleteAction::class::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::class::make([
                    Tables\Actions\DeleteBulkAction::class::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
