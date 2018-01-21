<?php
/**
 * Created by PhpStorm.
 * User: christiancannata
 * Date: 21/01/18
 * Time: 13:06
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    public function index()
    {

        return $this->render('test.html.twig', array('page_title' => "sadsad"));
    }
}