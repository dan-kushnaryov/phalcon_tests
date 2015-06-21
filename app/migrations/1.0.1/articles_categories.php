<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class ArticlesCategoriesMigration_101 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'articles_categories',
            array(
            'columns' => array(
                new Column(
                    'id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 11,
                        'first' => true
                    )
                ),
                new Column(
                    'article_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'after' => 'id'
                    )
                ),
                new Column(
                    'category_id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'after' => 'article_id'
                    )
                )
            ),
            'indexes' => array(
                new Index('PRIMARY', array('id')),
                new Index('article_id', array('article_id')),
                new Index('category_id', array('category_id'))
            ),
            'references' => array(
                new Reference('articles_categories_ibfk_1', array(
                    'referencedSchema' => 'invo',
                    'referencedTable' => 'article',
                    'columns' => array('article_id'),
                    'referencedColumns' => array('id'),
                    'onDelete' => 123
                )),
                new Reference('articles_categories_ibfk_2', array(
                    'referencedSchema' => 'invo',
                    'referencedTable' => 'category',
                    'columns' => array('category_id'),
                    'referencedColumns' => array('id'),
                    'asdasd234234' => 'asdasdasdasd'
                ))
            ),
            'options' => array(
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '1',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'latin1_swedish_ci'
            )
        )
        );
    }
}
