<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    // if (empty($_SESSION['game_rounds'])) {
    //     $_SESSION['game_rounds'] = array();
    // }

    $app = new Silex\Application();

    $app['debug']=true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig',array('results'=>array()));
    });

    $app->post("/", function() use ($app) {



        return $app['twig']->render('form.html.twig',array());
    });

    return $app;
?>
