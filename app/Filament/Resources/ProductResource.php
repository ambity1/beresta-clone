<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $pluralModelLabel = 'Товары';

    protected static ?string $modelLabel = 'товар';

    protected static ?string $navigationGroup = 'Работа с товарами';

    protected static bool $hasTitleCaseModelLabel = false;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->minLength(1)->maxLength(100)
                    ->unique()->label('Название продукта'),
                Forms\Components\Select::make('category_id')->required()->relationship('category')->preload()
                    ->searchable()->options(Category::query()->pluck('name', 'id'))->reactive()->label('Категория'),
                Forms\Components\Select::make('material_id')->required()->relationship('materials', 'name')->preload()
                    ->searchable()->reactive()->multiple()->label('Материалы'),
                Forms\Components\TextInput::make('height')->required()->integer()
                    ->minValue(1)
                    ->maxValue(1000)->label('Высота'),
                Forms\Components\TextInput::make('width')->required()->integer()
                    ->minValue(1)
                    ->maxValue(1000)->label('Ширина'),
                Forms\Components\TextInput::make('length')->required()->integer()
                    ->minValue(1)
                    ->maxValue(1000)->label('Длина'),
                Forms\Components\FileUpload::make('image')->directory('/media/images/products')
                    ->visibility('public')->label('Картинка'),
                Forms\Components\Textarea::make('description')->required()->label('Описание'),
                Forms\Components\Textarea::make('constrictive')->required()->label('Конструктив'),
                Forms\Components\Textarea::make('roof')->required()->label('Кровля'),
                Forms\Components\TextInput::make('processing')->required()->label('Обработка'),
                Forms\Components\TextInput::make('price')->required()->numeric()
                    ->minValue(1)
                    ->maxValue(9999999)->label('Цена'),
                Forms\Components\Toggle::make('visibility')->default(false)->label('Видимость'),
                Forms\Components\TextInput::make('oldPrice')->required()->numeric()
                    ->minValue(1)
                    ->maxValue(9999999)->label('Старая Цена'),
                Forms\Components\Toggle::make('isBenefit')->default('false')->label('Выгодный товар'),
                Forms\Components\Toggle::make('isPopulate')->default(false)->label('Популярный товар'),
                Forms\Components\TextInput::make('order')->label('Порядок'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->label('Название продукта'),
                Tables\Columns\TextColumn::make('category.name')->label('Категория'),
//                Tables\Columns\TextColumn::make('material.name')->label('Материалы')->,
                Tables\Columns\TextColumn::make('height')->label('Высота'),
                Tables\Columns\TextColumn::make('width')->label('Ширина'),
                Tables\Columns\TextColumn::make('length')->label('Длина'),
                Tables\Columns\ImageColumn::make('image')->label('Картинка'),
                Tables\Columns\TextColumn::make('description')->label('Описание'),

                Tables\Columns\TextColumn::make('constrictive')->label('Конструктив'),
                Tables\Columns\TextColumn::make('roof')->label('Кровля'),
                Tables\Columns\TextColumn::make('processing')->label('Обработка'),
                Tables\Columns\TextColumn::make('price')->label('Цена'),
                Tables\Columns\ToggleColumn::make('visibility')->label('Видимость'),

                Tables\Columns\TextColumn::make('oldPrice')->label('Старая цена'),
                Tables\Columns\ToggleColumn::make('isPopulate')->label('Популярный товар'),
                Tables\Columns\ToggleColumn::make('isBenefit')->label('Выгодный товар'),
                Tables\Columns\TextColumn::make('order')->label('Порядок')
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')->options(Category::query()->pluck('name', 'id'))->attribute('category_id'),
//                Tables\Filters\SelectFilter::make('material')->options(Material::query()->pluck('name', 'id'))->attribute('material_id'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Product $record) {
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
