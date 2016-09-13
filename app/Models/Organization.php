<?php

namespace App\Models;

use App\Models\BaseModelWithSoftDeletes;

/**
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property UserStatus[] $userStatuses
 * @property MailAgg[] $mailAggs
 * @property RoleUser[] $roleUsers
 * @property TeamUser[] $teamUsers
 * @property Robot[] $robots
 * @property User[] $users
 * @property Role[] $roles
 * @property CurrencyType[] $currencyTypes
 * @property Currency[] $currencies
 * @property QuestDepend[] $questDepends
 * @property MailTemplate[] $mailTemplates
 * @property Balance[] $balances
 * @property UserQuestStatus[] $userQuestStatuses
 * @property UserQuest[] $userQuests
 * @property Quest[] $quests
 * @property Action[] $actions
 * @property ActionTransaction[] $actionTransactions
 * @property ActionCurrency[] $actionCurrencies
 * @property UserSkill[] $userSkills
 * @property CurrencyTransaction[] $currencyTransactions
 * @property SkillLevel[] $skillLevels
 * @property Skill[] $skills
 * @property Command[] $commands
 * @property ActionCommand[] $actionCommands
 */
class Organization extends BaseModelWithSoftDeletes
{

    /**
     * @var array
     */
    protected $fillable = ['code', 'name', 'description', 'created_at', 'updated_at', 'deleted_at'];

}
