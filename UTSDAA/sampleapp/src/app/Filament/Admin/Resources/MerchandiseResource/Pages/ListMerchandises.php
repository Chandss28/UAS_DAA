<?php

namespace App\Filament\Admin\Resources\MerchandiseResource\Pages;

use App\Filament\Admin\Resources\MerchandiseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMerchandises extends ListRecords
{
    protected static string $resource = MerchandiseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
