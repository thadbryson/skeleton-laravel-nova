<?php

declare(strict_types = 1);

use Data\Migrations\HelperMigrationTrait;
use Data\Migrations\TableCreateMigration;
use Illuminate\Database\Schema\Blueprint;

final class CreateSessionsTable extends TableCreateMigration
{
    use HelperMigrationTrait;

    protected $id = false;

    protected $timestamps = false;

    protected function table(): string
    {
        return 'sessions';
    }

    protected function columns(Blueprint $table): void
    {
        $table->string('id')->unique();

        $this->addIdentifier($table, 'user_id');
        $this->addIpAddress($table)->nullable();
        $table->text('user_agent')->nullable();
        $table->text('payload');
        $table->integer('last_activity');
    }
}
