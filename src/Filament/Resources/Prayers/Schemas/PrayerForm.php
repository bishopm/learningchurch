<?php

namespace Bishopm\Learningchurch\Filament\Resources\Prayers\Schemas;

use Bishopm\Learningchurch\Models\Person;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Database\Eloquent\Builder;

class PrayerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                Select::make('person_id')
                    ->label('Author')
                    ->options(Person::orderBy('surname')->get()->pluck('fullname', 'id'))
                    ->required(),
                Select::make('tags')
                    ->relationship('tags','name',modifyQueryUsing: fn (Builder $query) => $query->where('type','liturgy'))
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
                                    ->default('liturgy')
                                    ->readonly()
                                    ->required(),
                                TextInput::make('slug')
                                    ->required(),
                            ])
                    ]),
                TextInput::make('slug')
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('published')
                    ->required()
                    ->default(0),
            ]);
    }
}
