<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LaporanMagang;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use SebastianBergmann\CodeCoverage\Filter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanMagangResource\Pages;
use App\Filament\Resources\LaporanMagangResource\RelationManagers;
use App\Filament\Resources\LaporanMagangResource\Pages\EditLaporanMagang;
use App\Filament\Resources\LaporanMagangResource\Pages\ListLaporanMagangs;
use App\Filament\Resources\LaporanMagangResource\Pages\CreateLaporanMagang;

class LaporanMagangResource extends Resource
{
    protected static ?string $model = LaporanMagang::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        TextInput::make('hari_tanggal_laporan')
            ->label('Hari & Tanggal Laporan')
            ->type('date')
            ->required(),

        Textarea::make('deskripsi_laporan')
            ->label('Deskripsi Laporan')
            ->required()
            ->columnSpanFull(),

        TextInput::make('pengeluaran_tiap_hari')
            ->label('Pengeluaran Tiap Hari')
            ->numeric()
            ->prefix('Rp')
            ->required(),
    ]);

    }

    public static function table(Table $table): Table
    {
        return $table
    ->columns([
        TextColumn::make('hari_tanggal_laporan')
            ->label('Hari & Tanggal')
            ->date()
            ->sortable()
            ->searchable(),

        TextColumn::make('deskripsi_laporan')
            ->label('Deskripsi')
            ->limit(50)
            ->tooltip(fn ($record) => $record->deskripsi_laporan),

        TextColumn::make('pengeluaran_tiap_hari')
            ->label('Pengeluaran')
            ->money('IDR', true) 
            ->sortable(),

        TextColumn::make('created_at')
            ->label('Dibuat Pada')
            ->dateTime()
            ->sortable(),
    ])
    ->filters([
        //
    ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLaporanMagangs::route('/'),
            'create' => Pages\CreateLaporanMagang::route('/create'),
            'edit' => Pages\EditLaporanMagang::route('/{record}/edit'),
        ];
    }
}
