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
        $this->call('UserStatusTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('CurrencyTypesTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('UserQuestStatusTableSeeder');
        $this->call('JobsTableSeeder');
        $this->call('UserProfileTableSeeder');
        $this->call('TeamUserTableSeeder');
        $this->call('QuestTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('CurrencyTableSeeder');
        $this->call('SkillTableSeeder');
        $this->call('BalanceTableSeeder');
        $this->call('ActionTableSeeder');
        $this->call('UserQuestTableSeeder');
        $this->call('ActionCurrencyTableSeeder');
        $this->call('MailTemplateTableSeeder');
        $this->call('UserSkillTableSeeder');
        $this->call('PasswordResetsTableSeeder');
    }
}
