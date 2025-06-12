<?php

namespace Bishopm\Learningchurch\Filament\Resources\Prayers;

use Bishopm\Learningchurch\Filament\Resources\Prayers\Tables\PrayersTable;
use Bishopm\Learningchurch\Filament\Resources\Prayers\Pages\CreatePrayer;
use Bishopm\Learningchurch\Filament\Resources\Prayers\Pages\EditPrayer;
use Bishopm\Learningchurch\Filament\Resources\Prayers\Pages\ListPrayers;
use Bishopm\Learningchurch\Filament\Resources\Prayers\Schemas\PrayerForm;
use BackedEnum;
use Bishopm\Learningchurch\Models\Prayer;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrayerResource extends Resource
{
    protected static ?string $model = Prayer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHandRaised;

    protected static ?string $modelLabel = "Liturgy";

    public static function form(Schema $schema): Schema
    {
        return PrayerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrayersTable::configure($table);
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
            'index' => ListPrayers::route('/'),
            'create' => CreatePrayer::route('/create'),
            'edit' => EditPrayer::route('/{record}/edit'),
        ];
    }
}
