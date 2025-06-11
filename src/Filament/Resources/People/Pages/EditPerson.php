<?php

namespace Bishopm\Learningchurch\Filament\Resources\People\Pages;

use Bishopm\Learningchurch\Filament\Resources\People\PersonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPerson extends EditRecord
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
