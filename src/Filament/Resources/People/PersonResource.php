<?php

namespace Bishopm\Learningchurch\Filament\Resources\People;

use Bishopm\Learningchurch\Filament\Resources\People\Pages\CreatePerson;
use Bishopm\Learningchurch\Filament\Resources\People\Pages\EditPerson;
use Bishopm\Learningchurch\Filament\Resources\People\Pages\ListPeople;
use Bishopm\Learningchurch\Filament\Resources\People\Schemas\PersonForm;
use Bishopm\Learningchurch\Filament\Resources\People\Tables\PeopleTable;
use BackedEnum;
use Bishopm\Learningchurch\Models\Person;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static ?string $modelLabel = "Author";

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    public static function form(Schema $schema): Schema
    {
        return PersonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PeopleTable::configure($table);
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
            'index' => ListPeople::route('/'),
            'create' => CreatePerson::route('/create'),
            'edit' => EditPerson::route('/{record}/edit'),
        ];
    }
}
