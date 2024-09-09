<?php

namespace App\Filament\Resources\AttandanceResource\Pages;

use App\Filament\Resources\AttandanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttandance extends EditRecord
{
    protected static string $resource = AttandanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
