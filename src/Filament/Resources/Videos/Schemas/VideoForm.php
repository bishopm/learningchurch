<?php

namespace Bishopm\Learningchurch\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('url')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('slug')
                    ->required(),
                DateTimePicker::make('published_at')
                    ->native(false)
                    ->displayFormat('Y-m-d H:i')
                    ->format('Y-m-d')
                    ->seconds(false)
                    ->default(date('Y-m-d 08:00:00')),
                Select::make('tags')
                    ->relationship('tags','name',modifyQueryUsing: fn (Builder $query) => $query->where('type','video'))
                    ->multiple()
                    ->createOptionForm([
                        Grid::make()
                            ->columns(2)
                            ->schema([
                                TextInput::make('name')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required(),
                                TextInput::make('type')
                                    ->default('video')
                                    ->readonly()
                                    ->required(),
                                TextInput::make('slug')
                                    ->required(),
                            ])
                    ]),
                Toggle::make('published')
                    ->required(),
            ]);
    }
}
