<?php

use Illuminate\Database\Seeder;

class SkillLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('skill_levels')->delete();
        
        \DB::connection('pgsql')->table('skill_levels')->insert(array (
            0 => 
            array (
                'id' => 5,
                'code' => '5',
                'name' => 'Отличные знания',
                'description' => 'Знания в данном направлении позволяют решать комплексные, сложные задачи и выполнять обычные быстрее нормативного срока в 2,5 раза быстрее и более. RoadMap и обучение - тоже ко мне.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'code' => '4',
                'name' => 'Хорошие знания',
                'description' => 'Знания в данном направлении позволяют решать сложные задачи и выполнять обычные быстрее нормативного срока в 1,5-2 раза.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '3',
                'name' => 'Нормальные знания',
                'description' => 'Знания достаточные, чтобы выполнять задачи, требующие данного навыка, в нормативные сроки.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'code' => '2',
                'name' => 'Минимальные знания',
                'description' => 'Имею минимальные знания для исполнения задач требующих навыка, но производительность будет минимальна.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1,
                'code' => '1',
                'name' => 'Нет знаний',
                'description' => 'Нет знаний для выполнения работы, но знаю, как их получить и хочу развиваться в данном направлении. Готов исполнять данные задачи, если есть значительный временной запас.',
                'organization_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
    	
    }
}
