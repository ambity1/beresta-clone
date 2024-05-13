<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use App\Models\Category;
use App\Models\Service;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;


    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['alias']=Str::slug($data['name']);
        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Service $record) {
                // delete single
                if ($record->image_background && $record->icon) {
                    Storage::disk('public')->delete($record->image);
                    Storage::disk('public')->delete($record->icon);
                }
            }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
