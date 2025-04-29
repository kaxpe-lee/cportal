<?php

namespace App\Filament\Taxes\Resources;

use App\Filament\Taxes\Resources\AccountResource\Pages;
use App\Filament\Taxes\Resources\AccountResource\RelationManagers;
use App\Models\Account;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::user()->id);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tipo_cliente')
                    ->label(__('admin.Account.acc_tipo_cliente'))
                    ->options([
                        "__('admin.Account.acc_tipo_cliente_fisico')" => __('admin.Account.acc_tipo_cliente_fisico'),
                        "__('admin.Account.acc_tipo_cliente_juridico')" => __('admin.Account.acc_tipo_cliente_juridico'),
                    ]),
                Forms\Components\TextInput::make('nombre')
                    ->label(__('admin.Account.acc_nombre')),
                Forms\Components\TextInput::make('apellidos')
                    ->label(__('admin.Account.acc_apellidos')),
                Forms\Components\TextInput::make('nie')
                    ->label(__('admin.Account.acc_nie')),
                Forms\Components\TextInput::make('email')
                    ->label(__('admin.Account.acc_email')),
                Forms\Components\TextInput::make('telefono')
                    ->label(__('admin.Account.acc_telefono')),
                Forms\Components\Select::make('idioma')
                ->label(__('admin.Account.acc_idioma'))
                ->options([
                    'es' => 'ES',
                    'en' => 'EN',
                    'fr' => 'FR',
                ]),
                Forms\Components\Select::make('residencia_ue')
                ->label(__('admin.Account.acc_residencia_ue'))
                ->options([
                    '0' => 'NO',
                    '1' => 'SI',
                ]),
                Forms\Components\TextInput::make('residencia_fiscal_pais')
                ->label(__('admin.Account.acc_residencia_fiscal_pais')),
                Forms\Components\TextInput::make('residencia_direccion')
                ->label(__('admin.Account.acc_residencia_direccion')),
                Forms\Components\TextInput::make('residencia_provincia')
                ->label(__('admin.Account.acc_residencia_provincia')),
                Forms\Components\TextInput::make('residencia_ciudad')
                ->label(__('admin.Account.acc_residencia_ciudad')),
                Forms\Components\TextInput::make('residencia_cp')
                ->label(__('admin.Account.acc_residencia_cp')),
                Forms\Components\TextInput::make('residencia_pais')
                ->label(__('admin.Account.acc_residencia_pais')),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                ->label(__('admin.Account.acc_fecha_nacimiento'))
                    ->required()
                    ->maxDate(now()),

                Forms\Components\TextInput::make('ciudad_nacimiento')
                ->label(__('admin.Account.acc_ciudad_nacimiento')),
                Forms\Components\TextInput::make('pais_nacimiento')
                ->label(__('admin.Account.acc_pais_nacimiento')),
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
