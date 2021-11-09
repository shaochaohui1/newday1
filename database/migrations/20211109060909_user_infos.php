<?php

use think\migration\Migrator;
use think\migration\db\Column;

class UserInfos extends Migrator
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
        $table  =  $this->table('list1',array('engine'=>'MyISAM'));
        $table->addColumn('userid', 'string',array('limit'  =>  15,'default'=>'','comment'=>'用户id'))
            ->addColumn('messages', 'string',array('limit'  =>  15,'default'=>'','comment'=>'消息'))
            ->addColumn('status', 'string',array('limit'  =>  15,'default'=>'0','comment'=>'状态'))
            ->create();
    }
    public function up()
    {

    }
    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
