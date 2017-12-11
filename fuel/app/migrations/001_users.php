<?php 
namespace Fuel\Migrations;

class Users
{

    function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('type' => 'int', 'constraint' => 5, 'auto-incremental' => true),
            'name' => array('type' => 'varchar', 'constraint' => 100),
            'password' => array('type' => 'varchar', 'constraint' => 100),
            
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('users');
    }
}