<?php

namespace App\Filament\Resources\NormaResource\Pages;

use App\Filament\Resources\NormaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNormas extends ManageRecords
{
    protected static string $resource = NormaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
