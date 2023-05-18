<?php

namespace App\Console\Commands;

use Database\Seeders\BrancheSeeder;
use Database\Seeders\DiplomeSeeder;
use Database\Seeders\ProgrammeSeeder;
use Illuminate\Console\Command;

class SeedMultipleSeeders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:multiple';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed all seeders simultaneously.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $seeders = [

            'LangueSeeder',
            'DiplomeSeeder',
            'BrancheSeeder',
            'CategorieSeeder',
            'FormationSeeder',
            'ProgrammeSeeder'
        ];
    
        foreach ($seeders as $seeder) {
            $this->call('db:seed', ['--class' => $seeder]);
        }
    }
}
