P=~/wog/app/WorldOfGame/Model
N=App\\WorldOfGame\\Model
php artisan krlove:generate:model User --table-name=wog_users 
php artisan krlove:generate:model Page --table-name=wog_pages 
php artisan krlove:generate:model UserStatus --table-name=wog_user_statuses --output-path=$P --namespace=$N
php artisan krlove:generate:model CurrencyType --table-name=wog_currency_types --output-path=$P --namespace=$N
php artisan krlove:generate:model Role --table-name=wog_roles --output-path=$P --namespace=$N
php artisan krlove:generate:model UserGuestStatus --table-name=wog_user_quest_statuses --output-path=$P --namespace=$N
php artisan krlove:generate:model UserProfile --table-name=wog_user_profiles --output-path=$P --namespace=$N
php artisan krlove:generate:model TiemUser --table-name=wog_team_users --output-path=$P --namespace=$N
php artisan krlove:generate:model Quest --table-name=wog_quests --output-path=$P --namespace=$N
php artisan krlove:generate:model Currency --table-name=wog_currencies --output-path=$P --namespace=$N
php artisan krlove:generate:model Skill --table-name=wog_skills --output-path=$P --namespace=$N
php artisan krlove:generate:model Balance --table-name=wog_balances --output-path=$P --namespace=$N
php artisan krlove:generate:model Action --table-name=wog_actions --output-path=$P --namespace=$N
php artisan krlove:generate:model UserQuest --table-name=wog_user_quests --output-path=$P --namespace=$N
php artisan krlove:generate:model ActionCurrency --table-name=wog_action_currencies --output-path=$P --namespace=$N
php artisan krlove:generate:model MailTemplate --table-name=wog_mail_templates --output-path=$P --namespace=$N
php artisan krlove:generate:model ActionTransaction --table-name=wog_action_transactions --output-path=$P --namespace=$N
php artisan krlove:generate:model CurrencyTransaction --table-name=wog_currency_transactions --output-path=$P --namespace=$N
php artisan krlove:generate:model UserSkill --table-name=wog_user_skills --output-path=$P --namespace=$N