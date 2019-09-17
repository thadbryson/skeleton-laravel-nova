<?php

declare(strict_types = 1);

use Illuminate\Support\Facades\Schema;

class Oauth2 extends \Data\Migrations\Api\Oauth2
{
    public function up(): void
    {
        if (Schema::hasTable($this->table()) === false) {
            parent::up();
        }
    }

    public function down(): void
    {

    }
}
