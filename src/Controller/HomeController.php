<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    // pour tous les controllers, je fais un extends de la classe AbstractController
    class HomeController extends AbstractController {

        /**
         * @Route("/test", name="home_index")
         */
        public function index(){

            return new Response('hello index');
        }

        /**
         * @Route("/pattes", name="home_pattes")
         */
        public function pattes(){

            return new Response("j'aime les pattes");
        }

        /**
         * @Route("/steak", name="home_steak")
         */
        public function steak(Request $request){
            if($request->query->get("age") > 18){
                return new Response("Bonjour");
            }else{
                return new Response("Nope");
            }
        }

        /**
         * @Route("/testid/{id}", name="home_testid")
         */
        public function testid($id){
            return new Response($id);
        }

        /**
         * @Route("/toto", name="home_toto")
         */
        public function toto(){
            return $this->redirectToRoute('home_index');
        }

        /**
         * @Route("/twigtest", name="home_twigtest")
         */
        public function twigtest(){
            $textPerso = "Salut je suis ta variable";
            return $this->render("test.html.twig", ["variableArticleTwig"=> $textPerso]);
        }

    }
