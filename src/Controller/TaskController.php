<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/task/", name="task_")
 */
class TaskController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(): Response
    {
        # Exercice 1 & 12
        $tasks_todo = [];
        $tasks_done = [];

        return $this->render('task/index.html.twig', [
            'tasks_todo' => $tasks_todo,
            'tasks_done' => $tasks_done,
        ]);
    }

    /**
     * @Route("new", name="new")
     */
    public function newAction(Request $request): Response
    {
        # Exercice 2
        return $this->render(
            'task/new.html.twig'
        );
    }

    /**
     * @Route("toogle/{id}", name="toogle")
     */
    public function toogleTaskAction(int $id): Response
    {
        # Exercice 4
        return $this->redirectToRoute("task_index");
    }

    /**
     * @Route("delete/{id}", name="delete", requirements={"id": "\d+" })
     */
    public function deleteTaskAction(int $id): Response
    {
        # Exercice 5
        return $this->redirectToRoute("task_index");
    }

    /**
     * @Route("delete/all_done", name="delete_all_done")
     */
    public function deleteAllTaskDoneAction(): Response
    {
        # Exercice 9
        return $this->redirectToRoute("task_index");
    }
}
