<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentHasClassResource\Pages;
use App\Filament\Resources\StudentHasClassResource\RelationManagers;
use App\Models\HomeRoom;
use App\Models\Periode;
use App\Models\Student;
use App\Models\StudentHasClass;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentHasClassResource extends Resource
{
    protected static ?string $model = StudentHasClass::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Student Has Class';
    protected static ?string $navigationGroup = 'Academic';
    protected static ?int $navigationSort = 22;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('students.name')->label('Student'),
                TextColumn::make('homeroom.classroom.name')->label('Class'),
                TextColumn::make('periode.name')->label('Periode'),
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
            'index' => Pages\ListStudentHasClasses::route('/'),
            'create' => Pages\FormstudentClass::route('/create'),
            'edit' => Pages\EditStudentHasClass::route('/{record}/edit'),
        ];
    }
}
