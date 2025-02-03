<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CustomerResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerResource\RelationManagers;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-User';
    
    protected static ?string $navigationLabel = 'Customer';

    protected static ?string $navigationGroup = 'Kelola';

    public static ?string $label = 'Kelola Customer';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_customer')
                ->label('Nama')
                ->required(),
                TextInput::make('code_customer')
                ->numeric()
                ->label('Kode')
                ->required(),
                TextInput::make('alamat_customer')
                ->label('Alamat')
                ->required(),
                TextInput::make('telepon_customer')
                ->numeric()
                ->label('Nomor Telepon')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_customer')
                ->searchable()
                ->label('Nama'),
                TextColumn::make('code_customer')
                ->label('Kode'),
                TextColumn::make('alamat_customer')
                ->label('Alamat'),
                TextColumn::make('telepon_customer')
                ->label('Nomor Telepon'),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
