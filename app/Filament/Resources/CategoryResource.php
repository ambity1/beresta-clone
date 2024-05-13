<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $pluralModelLabel = 'Категории';

    protected static ?string $modelLabel = 'категорию';

    protected static ?string $navigationGroup = 'Работа с товарами';

    protected static bool $hasTitleCaseModelLabel = false;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->minLength(1)->maxLength(100)
                    ->unique()->label('Название категории'),
                Forms\Components\Toggle::make('visibility')->default(false)->label('Видимость'),
                Forms\Components\FileUpload::make('image')->directory('/media/images/categories')
                                    ->visibility('public')->label('Картинка'),
                Forms\Components\Toggle::make('visibilityOnMainPage')->default(false)->label('Видимость на главной странице. Максимум 6.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                Tables\Columns\TextColumn::make('id')->searchable()->label('Идентификационный номер'),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Название категории'),
                Tables\Columns\ToggleColumn::make('visibility')->label('Видимость'),
                Tables\Columns\ImageColumn::make('image')->label('Картинка'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Category $record) {
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                }),
            ])
            ->bulkActions([
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
