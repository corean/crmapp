<?php

use yii\db\Schema;
use yii\db\Migration;

class m150225_180138_init_phone_table extends Migration
{
    public function up()
    {
        $this->createTable('phone',
            [
                'id' => 'pk',
                'customer_id' => 'int unique',
                'number' => 'text',
            ],
            'ENGINE=InnoDB'
        );
        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function down()
    {
        echo "m150225_180138_init_phone_table cannot be reverted.\n";
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');

        return false;
    }
}
