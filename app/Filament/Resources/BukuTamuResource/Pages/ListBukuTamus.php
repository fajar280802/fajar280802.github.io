<?php

namespace App\Filament\Resources\BukuTamuResource\Pages;

use App\Filament\Resources\BukuTamuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBukuTamus extends ListRecords
{
    
    protected static string $resource = BukuTamuResource::class;
    protected static ?string $title = 'Daftar Tamu';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return 'Buku Tamu';
    }
}
