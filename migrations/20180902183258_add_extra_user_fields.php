<?php


use Phinx\Migration\AbstractMigration;

class AddExtraUserFields extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('dietary_preference', 'string', ['limit' => 50, 'default' => 'nopref', 'null' => false])
            ->addColumn('food_allergies', 'string', ['default' => '', 'null' => false])
            ->update();
    }
}
