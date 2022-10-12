<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m221012_233252_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */


    public function safeUp()
    {
        $this->createTable('{{%video}}', [
           'video_id' => $this->string(16)->notNUll(),
            'title' => $this->string(125)->notNull(),
            'description' => $this->text(),
            'tags'=> $this ->string(256),
            'status'=> $this ->integer(1),
            'has_tumbnail' =>$this -> boolean(),
            'video_name'=>$this ->string(256),
            'created_at'=> $this ->integer(11),
            'updated_at'=> $this ->integer(11),
            'created_by' => $this->integer(11),
        ]);

        //Adding custom primary key to videos         
        $this->addPrimaryKey(name:'PK_videos_video_id',table:'{{%video}}',columns:'video_id');


        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-videos-created_by}}',
            '{{%video}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-videos-created_by}}',
            '{{%video}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-videos-created_by}}',
            '{{%video}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-videos-created_by}}',
            '{{%video}}'
        );

        $this->dropTable('{{%video}}');
    }
}
