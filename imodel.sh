P=~/wog/app/WorldOfGame/Model
N=App\\WorldOfGame\\Model
PRE_=wog_
php artisan krlove:generate:model User --table-name=$PRE_users 
php artisan krlove:generate:model Page --table-name=$PRE_pages 
php artisan krlove:generate:model UserStatus --table-name=$PRE_user_statuses --output-path=$P --namespace=$N
php artisan krlove:generate:model CurrencyType --table-name=$PRE_currency_types --output-path=$P --namespace=$N
php artisan krlove:generate:model Role --table-name=$PRE_roles --output-path=$P --namespace=$N
php artisan krlove:generate:model UserGuestStatus --table-name=$PRE_user_quest_statuses --output-path=$P --namespace=$N
php artisan krlove:generate:model UserProfile --table-name=$PRE_user_profiles --output-path=$P --namespace=$N
php artisan krlove:generate:model TiemUser --table-name=$PRE_team_users --output-path=$P --namespace=$N
php artisan krlove:generate:model Quest --table-name=$PRE_quests --output-path=$P --namespace=$N
php artisan krlove:generate:model Currency --table-name=$PRE_currencies --output-path=$P --namespace=$N
php artisan krlove:generate:model Skill --table-name=$PRE_skills --output-path=$P --namespace=$N
php artisan krlove:generate:model Balance --table-name=$PRE_balances --output-path=$P --namespace=$N
php artisan krlove:generate:model Action --table-name=$PRE_actions --output-path=$P --namespace=$N
php artisan krlove:generate:model UserQuest --table-name=$PRE_user_quests --output-path=$P --namespace=$N
php artisan krlove:generate:model ActionCurrency --table-name=$PRE_action_currencies --output-path=$P --namespace=$N
php artisan krlove:generate:model MailTemplate --table-name=$PRE_mail_templates --output-path=$P --namespace=$N
php artisan krlove:generate:model ActionTransaction --table-name=$PRE_action_transactions --output-path=$P --namespace=$N
php artisan krlove:generate:model CurrencyTransaction --table-name=$PRE_currency_transactions --output-path=$P --namespace=$N
php artisan krlove:generate:model UserSkill --table-name=$PRE_user_skills --output-path=$P --namespace=$N
php artisan krlove:generate:model QuestDepend --table-name=quest_depends --output-path=$P --namespace=$N
php artisan krlove:generate:model Robot --table-name=$PRE_robots --output-path=$P --namespace=$N
php artisan krlove:generate:model MailAgg --table-name=$PRE_mail_aggs --output-path=$P --namespace=$N
