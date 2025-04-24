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
                Forms\Components\Select::make('tipo_cliente')
                ->options([
                    'f' => 'Fisico',
                    'en' => 'Jurídico',
                ]),
                Forms\Components\TextInput::make('nombre'),
                Forms\Components\TextInput::make('apellidos'),
                Forms\Components\TextInput::make('nie'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('telefono'),
                Forms\Components\Select::make('idioma')
                ->options([
                    'es' => 'ES',
                    'en' => 'EN',
                    'fr' => 'FR',
                ]),
                Forms\Components\Select::make('residencia_ue')
                ->options([
                    '0' => 'NO',
                    '1' => 'SI',
                ]),
                Forms\Components\TextInput::make('residencia_fiscal_pais'),
                Forms\Components\TextInput::make('residencia_direccion'),
                Forms\Components\TextInput::make('residencia_provincia'),
                Forms\Components\TextInput::make('residencia_ciudad'),
                Forms\Components\TextInput::make('residencia_cp'),
                Forms\Components\TextInput::make('residencia_pais'),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->required()
                    ->maxDate(now()),

                Forms\Components\TextInput::make('ciudad_nacimiento'),
                Forms\Components\TextInput::make('pais_nacimiento'),
                
                Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                ->required(),
                
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
