<?php

use yii\db\Migration;

/**
 * Class m200925_071828_add_post_field_slug
 */
class m200925_071828_add_post_field_slug extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%shop_tech_info}}', 'slug', $this->string(255)->notNull()->after('body')->unique());
        $this->createIndex('{{%idx-post-slug}}', '{{%shop_tech_info}}', 'slug', true);
    }

    public function safeDown()
    {
        $this->dropColumn('{{%shop_tech_info}}', 'slug');
    }
}
