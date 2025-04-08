<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('property_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('type_property')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rented')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('date_adquisition')
                    ->required(),
                Forms\Components\TextInput::make('referencia_catastro')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('valor_catastro')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('street_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('street_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('province')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cp')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('property_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type_proprty')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rented')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_adquisition')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('referencia_catastro')
                    ->searchable(),
                Tables\Columns\TextColumn::make('valor_catastro')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('street_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('street_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
