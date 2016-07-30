<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//	$this->call(UsersTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
//        $this->call(RolesTableSeeder::class);
//        $this->call(CurrenciesTableSeeder::class);
        $this->call('CurrencyTrancactionTableSeeder');
        $this->call('UserStatusTableSeeder');
        $this->call('TeamUserTableSeeder');
        $this->call('UserProfileTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('CurrencyTypesTableSeeder');
        $this->call('QuestTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('CurrencyTableSeeder');
        $this->call('UserQuestStatusTableSeeder');
        $this->call('BalanceTableSeeder');
        $this->call('UserQuestTableSeeder');
        $this->call('ActionCurrencyTableSeeder');
        $this->call('MailTemplateTableSeeder');
        $this->call('ActionTableSeeder');
        $this->call('ActionTrancactionTableSeeder');
        $this->call('JobsTableSeeder');
        $this->call('SkillTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('UserSkillTableSeeder');
    }
}
