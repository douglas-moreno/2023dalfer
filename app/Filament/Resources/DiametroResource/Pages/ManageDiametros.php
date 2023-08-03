<?php

namespace App\Filament\Resources\DiametroResource\Pages;

use App\Filament\Resources\DiametroResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDiametros extends ManageRecords
{
    protected static string $resource = DiametroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
