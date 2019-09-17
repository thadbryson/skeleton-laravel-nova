<?php

declare(strict_types = 1);

use Data\Migrations\HelperMigrationTrait;
use Data\Migrations\TableCreateMigration;
use Illuminate\Database\Schema\Blueprint;

final class CreatePasswordResetsTable extends TableCreateMigration
{
    use HelperMigrationTrait;

    protected $id = false;

    protected $timestamps = false;

    protected function table(): string
    {
        return 'auth_password_resets';
    }

    protected function columns(Blueprint $table): void
    {
        $this->addEmail($table)->index();
        $table->string('token');
        $table->timestamp('created_at')->nullable();
    }
}
