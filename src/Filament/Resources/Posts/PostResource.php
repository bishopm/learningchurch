<?php

namespace Bishopm\Learningchurch\Filament\Resources\Posts;

use Bishopm\Learningchurch\Filament\Resources\Posts\Pages\CreatePost;
use Bishopm\Learningchurch\Filament\Resources\Posts\Pages\EditPost;
use Bishopm\Learningchurch\Filament\Resources\Posts\Pages\ListPosts;
use Bishopm\Learningchurch\Filament\Resources\Posts\Schemas\PostForm;
use Bishopm\Learningchurch\Filament\Resources\Posts\Tables\PostsTable;
use BackedEnum;
use Bishopm\Learningchurch\Models\Post;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostsTable::configure($table);
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
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }
}
