<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUser extends Command
{

    protected $signature = 'make:user {name} {email} {password}';

    protected $description = 'Create new user';

    public function handle()
    {
        $user = User::create($this->argument());

        $this->output->writeln($user->toJson());
    }
}
