<?php
/**
 * Created by PhpStorm.
 * User: christiancannata
 * Date: 21/01/18
 * Time: 13:06
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    public function index()
    {

        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://jsonplaceholder.typicode.com/posts');



        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml(
                $this->renderView(
                    'test.html.twig',
                    [
                        'page_title' => "sadsad",
                        'posts' => json_decode($res->getBody()->getContents(), true)
                    ]
                )
            ),
            "example_" . time() . ".pdf"
        );

    }
}