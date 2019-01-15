<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Unirest\Request;

class FierceKangorooController extends AbstractController
{
    /**
     * @Route("/fierce/kangoroo", name="fierce_kangoroo")
     */
    public function index()
    {
        $headers = array('Accept' => 'application/json');
        $query = array('foo' => 'hello', 'bar' => 'world');

        $response = Request::post('http://mockbin.com/request', $headers, $query);

        /**$response->code;        // HTTP Status code
        $response->headers;     // Headers
        $response->body;        // Parsed body
        $response->raw_body;    // Unparsed body**/
        dd($response->body);
        return $this->render('fierce_kangoroo/index.html.twig', [
            'controller_name' => 'FierceKangorooController',
        ]);
    }
}
