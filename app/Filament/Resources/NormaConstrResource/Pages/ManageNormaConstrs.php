<?php

namespace App\Filament\Resources\NormaConstrResource\Pages;

use App\Filament\Resources\NormaConstrResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNormaConstrs extends ManageRecords
{
    protected static string $resource = NormaConstrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
