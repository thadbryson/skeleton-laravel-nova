<?php

declare(strict_types = 1);

namespace App\Console\Traits;

use Illuminate\Console\Command;
use RuntimeException;
use function is_array;
use function is_string;
use function str_pad;

/**
 * Class AbstractApiResult
 *
 * @mixin Command
 */
trait CommandTrait
{
    abstract protected function fetch(): array;

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Fetching');
        $this->line('');

        $result = $this->fetch();

        if ($result === null) {
            throw new RuntimeException('Mapped could not be fetched.');
        }

        foreach ($result as $key => $value) {

            if (is_array($value) === true) {
                $this->info((string) $key);

                foreach ($value as $subkey => $subvalue) {
                    $this->printResult('    ' . (string) $subkey, $subvalue);
                }
            }
            else {
                $this->printResult($key, $value);
            }
        }

        $this->line('');
        $this->info('Complete');
    }

    private function printResult($key, $value): void
    {
        if (is_string($key)) {
            $this->getOutput()->write('<comment>' . str_pad((string) $key, 30) . '</comment>');
        }

        $this->getOutput()->write((string) $value, true);
    }
}
