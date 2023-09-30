<?php

namespace App\Console;

use App\Example\Models\User;
use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    private const RECORDS_COUNT = 5;

    protected $signature = 'hello-world';

    public function handle(): int
    {
        $this->warn(
            'Привет! Данный скрипт предназначен для демонстрации работоспособности связки технологий Laravel и MongoDB.'
        );
        $this->info(
            sprintf("Сейчас в коллекцию users базы данных example будет добавлено %s записей.", self::RECORDS_COUNT)
        );
        $this->info('Далее эти записи будут прочитаны и идентификаторы этих записей будут выведены в терминал');

        $progressBar = $this->output->createProgressBar(self::RECORDS_COUNT);
        $progressBar->start();
        $this->newLine();

        for ($index = 0; $index < self::RECORDS_COUNT; $index++) {
            $user = new User();
            $user->save();

            $this->line(
                sprintf('Была добавлена запись с идентификатором: %s', $user->getKey())
            );
            $this->newLine();

            $progressBar->advance();
            $this->newLine();

            sleep(1);
        }

        $progressBar->finish();

        $this->info(
            sprintf('Было успешно добавлено %s записей. Осуществим чтение записей из базы данных.', self::RECORDS_COUNT)
        );
        $this->newLine();

        foreach (User::all() as $user) {
            $this->line(
                sprintf('Прочитана запись с идентификатором: %s', $user->getKey())
            );

            sleep(1);
        }

        $this->warn('Скрипт успешно завершил свою работу.');

        return self::SUCCESS;
    }
}
