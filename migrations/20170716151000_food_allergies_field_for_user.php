<?php

use Phinx\Migration\AbstractMigration;

class FoodAllergiesFieldForUser extends AbstractMigration
{
    public function up()
    {
        $this->table('users')
            ->addColumn('food_allergies', 'text', ['after' => 'dietary_preference'])
            ->update();
    }

    public function down()
    {
        $this->table('users')
            ->removeColumn('food_allergies');
    }
}
