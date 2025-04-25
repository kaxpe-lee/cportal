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

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre para identificar la propiedad')
                    ->required(),
                Forms\Components\Select::make('tipo')
                    ->options([
                        'House-Apartment-Villa-Commercial' => 'House-Apartment-Villa-Commercial',
                        'Garage-Parking-Store room' => 'Garage-Parking-Store room',
                    ]),
                Forms\Components\TextInput::make('days_rented')
                    ->label('Número de días alquilad')
                    ->numeric() // Asegura que el valor sea numérico
                    ->rules(['numeric', 'min:0', 'max:365'])
                    ->helperText('Número de días que se ha alquilado la propiedad durante el año'),
                Forms\Components\Select::make('tipo_calle')
                    ->label('Tipo de vía')
                    ->options([
                        'Calle' => 'Calle',
                        'Avenida' => 'Avenida',
                        'Plaza' => 'Plaza'
                    ]),

                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero_calle'), 
                Forms\Components\TextInput::make('ciudad'), 
                Forms\Components\TextInput::make('provincia'),
                Forms\Components\TextInput::make('codigo_postal'),
                Forms\Components\TextInput::make('referencia_catastro')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('valor_catastro')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('days_rented')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipo_calle')
                    ->sortable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero_calle')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ciudad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provincia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_postal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('referencia_catastro')
                    ->searchable(),
                Tables\Columns\TextColumn::make('valor_catastro')
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
