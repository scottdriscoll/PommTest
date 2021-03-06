<?php
/**
 * This file has been automatically generated by Pomm's generator.
 * You MIGHT NOT edit this file as your changes will be lost at next
 * generation.
 */

namespace AppBundle\Model\MyDb1\PublicSchema\AutoStructure;

use PommProject\ModelManager\Model\RowStructure;

/**
 * Student
 *
 * Structure class for relation public.student.
 * 
 * Class and fields comments are inspected from table and fields comments.
 * Just add comments in your database and they will appear here.
 * @see http://www.postgresql.org/docs/9.0/static/sql-comment.html
 *
 *
 *
 * @see RowStructure
 */
class Student extends RowStructure
{
    /**
     * __construct
     *
     * Structure definition.
     *
     * @access public
     */
    public function __construct()
    {
        $this
            ->setRelation('public.student')
            ->setPrimaryKey(['id'])
            ->addField('id', 'int4')
            ->addField('name', 'varchar')
            ->addField('age', 'int4')
            ;
    }
}
