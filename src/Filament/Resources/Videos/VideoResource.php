<?php

namespace Bishopm\Learningchurch\Filament\Resources\Videos;

use Bishopm\Learningchurch\Filament\Resources\Videos\Pages\CreateVideo;
use Bishopm\Learningchurch\Filament\Resources\Videos\Pages\EditVideo;
use Bishopm\Learningchurch\Filament\Resources\Videos\Pages\ListVideos;
use Bishopm\Learningchurch\Filament\Resources\Videos\Schemas\VideoForm;
use Bishopm\Learningchurch\Filament\Resources\Videos\Tables\VideosTable;
use BackedEnum;
use Bishopm\Learningchurch\Models\Video;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VideoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideosTable::configure($table);
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
            'index' => ListVideos::route('/'),
            'create' => CreateVideo::route('/create'),
            'edit' => EditVideo::route('/{record}/edit'),
        ];
    }
}
