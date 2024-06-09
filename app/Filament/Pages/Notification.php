<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Notification extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.notification';
    protected static ?int $navigationSort = 4;
}
