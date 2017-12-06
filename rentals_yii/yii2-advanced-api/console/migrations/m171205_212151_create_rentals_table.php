<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rentals`.
 */
class m171205_212151_create_rentals_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('rentals', [
            'id' => $this->primaryKey(),
            'id_name' => $this->string(),
            'title' => $this->string(),
            'owner' => $this->string(),
            'city' => $this->string(),
            'propertyType' => $this->string(),

            'bedrooms' => $this->smallInteger(),
            'image' => $this->string(),
            'description' => $this->text(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('rentals');
    }
}
