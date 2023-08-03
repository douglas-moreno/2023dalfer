<?php

namespace App\Filament\Resources\EspessuraResource\Pages;

use App\Filament\Resources\EspessuraResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEspessuras extends ManageRecords
{
    protected static string $resource = EspessuraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
