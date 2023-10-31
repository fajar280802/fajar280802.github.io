<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\BukuTamu;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BukuTamuResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BukuTamuResource\RelationManagers;
use Illuminate\Validation\Rules\Unique;

class BukuTamuResource extends Resource
{
    protected static ?string $model = BukuTamu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Buku Tamu';
    protected static ?string $title = 'Daftar Tamu';
    protected ?string $subheading = 'Daftar Tamu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama')->required(true),
                        TextInput::make('keperluan')->required(true),
                        Select::make('jenis_kelamin')
                            ->options([
                                'laki-laki'=> 'laki-laki',
                                'perempuan'=> 'perempuan',
                            ]),
                            TextInput::make('no_hp')->required(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(true),
                TextColumn::make('keperluan')->searchable(true),
                TextColumn::make('jenis_kelamin')->searchable(true),
                TextColumn::make('no_hp')->searchable(true),
                TextColumn::make('tanggal')->searchable(true),
                TextColumn::make('actions'),
            
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\viewAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListBukuTamus::route('/'),
            'create' => Pages\CreateBukuTamu::route('/create'),
            'edit' => Pages\EditBukuTamu::route('/{record}/edit'),
        ];
    }    
}
