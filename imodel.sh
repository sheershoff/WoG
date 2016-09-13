P=~/wog/app/Models
N=App\\Models
B1=App\\Models\\BaseModel
B2=App\\Models\\BaseModelWithSoftDeletes

php artisan krlove:generate:model Command --output-path=$P --namespace=$N --base-class-name=$B2
exit
pause

php artisan krlove:generate:model Action --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model ActionCurrency --table-name=action_currencies --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model ActionTransaction --output-path=$P --namespace=$N --base-class-name=$B2
#php artisan krlove:generate:model Balance --output-path=$P --namespace=$N --base-class-name=$B2
#php artisan krlove:generate:model Currency --table-name=currencies --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model CurrencyTransaction --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model CurrencyType --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model MailAgg --table-name=mail_aggs --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model MailTemplate --table-name=mail_templates --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model Organization --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model Page --table-name=pages --output-path=$P
#php artisan krlove:generate:model Quest --table-name=quests --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model QuestDepend --table-name=quest_depends --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model Robot --table-name=robots --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model Role --table-name=roles --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model RoleUser --table-name=role_user --output-path=$P --namespace=$N --base-class-name=BaseModel
php artisan krlove:generate:model Skill --table-name=skills --output-path=$P --namespace=$N --base-class-name=$B2
#php artisan krlove:generate:model TeamUser --output-path=$P --namespace=$N --base-class-name=$B2
#php artisan krlove:generate:model User --table-name=users --base-class-name=$B2
php artisan krlove:generate:model UserQuest --table-name=user_quests --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model UserQuestStatus --table-name=user_quest_statuses --output-path=$P --namespace=$N --base-class-name=$B2
#php artisan krlove:generate:model UserSkill --table-name=user_skills --output-path=$P --namespace=$N --base-class-name=$B2
php artisan krlove:generate:model UserStatus --table-name=user_statuses --output-path=$P --namespace=$N --base-class-name=$B2
