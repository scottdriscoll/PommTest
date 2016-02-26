<?php

namespace AppBundle\Model\MyDb1\PublicSchema;

use PommProject\ModelManager\Model\Model;
use PommProject\ModelManager\Model\Projection;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

use PommProject\Foundation\Where;

use AppBundle\Model\MyDb1\PublicSchema\AutoStructure\Student as StudentStructure;
use AppBundle\Model\MyDb1\PublicSchema\Student;

/**
 * StudentModel
 *
 * Model class for table student.
 *
 * @see Model
 */
class StudentModel extends Model
{
    use WriteQueries;

    /**
     * __construct()
     *
     * Model constructor
     *
     * @access public
     */
    public function __construct()
    {
        $this->structure = new StudentStructure;
        $this->flexible_entity_class = '\AppBundle\Model\MyDb1\PublicSchema\Student';
    }
}
