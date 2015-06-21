<?php

use Phinx\Migration\AbstractMigration;

class AnotherMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $table = $this->table( 'products' );
        $table->addForeignKey( 'product_types_id', 'product_types', 'id', array(
            'delete' => 'CASCADE'
        ) )->save();
    }

    public function down()
    {
        $table = $this->table( 'products' );
        $table->dropForeignKey( 'product_types_id' )->save();   
    }

}
