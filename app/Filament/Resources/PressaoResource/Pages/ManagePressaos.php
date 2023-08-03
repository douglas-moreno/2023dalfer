<?php

namespace App\Filament\Resources\PressaoResource\Pages;

use App\Filament\Resources\PressaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePressaos extends ManageRecords
{
    protected static string $resource = PressaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
