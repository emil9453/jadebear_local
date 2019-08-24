<?php

use Illuminate\Database\Seeder;

class TeamMemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'position' => 'Глава компании', 'name' => 'Борис', 'surname' => 'Мельников', 'about' => 'Исполнительный директор — один из руководителей компании.', 'photo' => '/tmp/phpiKJkxq',],

        ];

        foreach ($items as $item) {
            \App\TeamMember::create($item);
        }
    }
}
