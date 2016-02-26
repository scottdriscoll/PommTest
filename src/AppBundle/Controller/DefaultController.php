<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use AppBundle\Model\MyDb1\PublicSchema\Student;
use AppBundle\Model\MyDb1\PublicSchema\StudentModel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $students = $this->get('pomm')['my_db1']
            ->getModel('\AppBundle\Model\MyDb1\PublicSchema\StudentModel')
            ->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ['students' => $students]);
    }

    /**
     * @Route("/view/{id}", name="view_student")
     * @ParamConverter("student", options={"model": "AppBundle\Model\MyDb1\PublicSchema\StudentModel"})
     *
     * @param Student $student
     * @return Response
     */
    public function viewAction(Student $student = null)
    {
        if ($student === null) {
            throw new NotFoundHttpException();
        }

        return $this->render('default/view.html.twig', ['student' => $student]);
    }
}
