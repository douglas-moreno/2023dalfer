<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoResource\Pages;
use App\Filament\Resources\ProdutoResource\RelationManagers;
use App\Models\Produto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Tabela Interna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('codigo')
                    ->required()
                    ->maxLength(5),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('reducao')
                    ->required(),
                Forms\Components\Toggle::make('schedule')
                    ->required(),
                Forms\Components\Toggle::make('material')
                    ->required(),
                Forms\Components\Toggle::make('norma_constr')
                    ->required(),
                Forms\Components\Toggle::make('grau')
                    ->required(),
                Forms\Components\Toggle::make('pressao')
                    ->required(),
                Forms\Components\Toggle::make('norma_material')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('reducao')
                    ->boolean(),
                Tables\Columns\IconColumn::make('schedule')
                    ->boolean(),
                Tables\Columns\IconColumn::make('material')
                    ->boolean(),
                Tables\Columns\IconColumn::make('norma_constr')
                    ->boolean(),
                Tables\Columns\IconColumn::make('grau')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pressao')
                    ->boolean(),
                Tables\Columns\IconColumn::make('norma_material')
                    ->boolean(),
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
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
        ];
    }
}
