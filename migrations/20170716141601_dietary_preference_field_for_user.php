<?php

use Phinx\Migration\AbstractMigration;

class DietaryPreferenceFieldForUser extends AbstractMigration
{
    public function up()
    {
        $this->table('users')
            ->addColumn('dietary_preference', 'string', ['limit' => 50, 'default' => 'nopref', 'after' => 'hotel'])
            ->update();
    }

    public function down()
    {
        $this->table('users')
            ->removeColumn('dietary_preference');
    }
}
