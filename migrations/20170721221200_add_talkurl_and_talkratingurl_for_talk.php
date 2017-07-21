<?php

use Phinx\Migration\AbstractMigration;

class AddTalkurlAndTalkratingurlForTalk extends AbstractMigration
{
    public function up()
    {
        $this->table('talks')
            ->addColumn('video_url', 'string')
            ->addColumn('rating_url', 'string')
            ->update();
    }

    public function down()
    {
        $this->table('talks')
            ->removeColumn('video_url')
            ->removeColumn('rating_url');
    }
}
