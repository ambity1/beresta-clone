<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Promotion;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $pluralModelLabel = 'Услуги';

    protected static ?string $navigationGroup = 'Работа с сайтом';
    protected static ?string $modelLabel = 'услугу';

    protected static bool $hasTitleCaseModelLabel = false;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->minLength(1)->maxLength(100)
                    ->unique()->label('Название услуги'),
                Forms\Components\Textarea::make('description')->required()->label('Описание'),
                Forms\Components\FileUpload::make('icon')->required()->label('Иконка')->directory('/media/images/services/icons')
                    ->visibility('public')->imageResizeMode('force')->image()
                    ->imageResizeTargetWidth('30')
                    ->imageResizeTargetHeight('30'),
                Forms\Components\FileUpload::make('image_background')->required()->label('Фон')->directory('/media/images/services/backgrounds')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->label('Название услуги'),
                Tables\Columns\TextColumn::make('description')->label('Описание'),
                Tables\Columns\ImageColumn::make('icon')->label('Иконка'),
                Tables\Columns\ImageColumn::make('image_background')->label('Картинка'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Service $record) {
                    if ($record->image_background && $record->icon) {
                        Storage::disk('public')->delete($record->image_background);
                        Storage::disk('public')->delete($record->icon);
                    }
                }),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
