<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Userinfo extends Migrator
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
        $table  =  $this->table('users_info',array('engine'=>'MyISAM'));
        $table->addColumn('user_id', 'string',array('limit'  =>  15,'default'=>'','comment'=>'用户id'))
            ->addColumn('username', 'string',array('limit'  =>  15,'default'=>'','comment'=>'用户名'))
            ->addColumn('mobile', 'string',array('limit'  =>  15,'default'=>'','comment'=>'手机号'))
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
