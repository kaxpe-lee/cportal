<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccountResource\Pages;
use App\Filament\Resources\AccountResource\RelationManagers;
use App\Models\Account;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre'),
                Forms\Components\TextInput::make('apellidos'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\Select::make('idioma')
                ->options([
                    'es' => 'ES',
                    'en' => 'EN',
                    'fr' => 'FR',
                ]),
                Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                ->createOptionForm([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->label('Email address')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('password')
                        ->label('password')
                        ->required(),
                ])
                ->required(),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->required()
                    ->maxDate(now()),
                
                Forms\Components\Repeater::make('properties')
                    ->relationship('properties') // Relación con la tabla intermedia
                    ->schema([
                        Forms\Components\Select::make('id')
                            ->label('Propiedad')
                            ->relationship('properties', 'id') // Mostrar nombre de la propiedad
                            ->required(),
                
                        Forms\Components\TextInput::make('participacion')
                            ->label('Participación (%)')
                            ->numeric()
                            ->minValue(0)
                            ->maxValue(100)
                            ->required(),
                    ])
                    ->columns(2) // Muestra los campos en dos columnas
                    ->addable(true) // Permite agregar más propiedades
                    ->deletable(true), // Permite eliminar propiedades
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('apellidos')
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                ->sortable(),
                Tables\Columns\TextColumn::make('user.name'),
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
            'index' => Pages\ListAccounts::route('/'),
            'create' => Pages\CreateAccount::route('/create'),
            'edit' => Pages\EditAccount::route('/{record}/edit'),
        ];
    }
}
