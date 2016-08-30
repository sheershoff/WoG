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
        $this->call('OrganizationsTableSeeder');
        $this->call('UserStatusesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('CurrencyTypesTableSeeder');
        $this->call('PasswordResetsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UserQuestStatusesTableSeeder');
        $this->call('JobsTableSeeder');
        $this->call('TeamUsersTableSeeder');
        $this->call('RobotsTableSeeder');
        $this->call('QuestsTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('CurrenciesTableSeeder');
        $this->call('SkillsTableSeeder');
        $this->call('BalancesTableSeeder');
        $this->call('ActionsTableSeeder');
        $this->call('UserQuestsTableSeeder');
        $this->call('ActionCurrenciesTableSeeder');
        $this->call('MailTemplatesTableSeeder');
        $this->call('ActionTransactionsTableSeeder');
        $this->call('CurrencyTransactionsTableSeeder');
        $this->call('UserSkillsTableSeeder');
        $this->call('MailAggsTableSeeder');
        $this->call('SkillLevelsTableSeeder');
        $this->call('QuestDependsTableSeeder');
        $this->call('CommandsTableSeeder');
        $this->call('ActionCommandTableSeeder');
    }
}
