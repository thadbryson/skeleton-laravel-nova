<?php

declare(strict_types = 1);

use Data\Migrations\HelperMigrationTrait;
use Data\Migrations\TableCreateMigration;
use Illuminate\Database\Schema\Blueprint;

final class CreateUsersTable extends TableCreateMigration
{
    use HelperMigrationTrait;

    protected $name = true;

    protected function table(): string
    {
        return 'users';
    }

    protected function columns(Blueprint $table): void
    {
        $table->string('theme', 50)->default('Default');
        $this->addEmail($table)->unique();
        $this->addDateTime($table, 'email_verified_at')->nullable();
        $table->string('salt')->default('');
        $table->string('password');
        $table->rememberToken();
        $table->string('api_token')
            ->default('')
            ->nullable(false);
    }
}
