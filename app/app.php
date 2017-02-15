<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindReplace.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug']=true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig',array('result'=>array()));
    });

    $app->post("/", function() use ($app) {
        $new_phrase = new FindReplace();
        $sentence = $_POST['sentence'];
        $word_to_search = $_POST['word_to_search'];
        $replace_with = $_POST['replace_with'];

        $result = $new_phrase->regexReplace($sentence, $word_to_search, $replace_with);

        return $app['twig']->render('form.html.twig', array('result' => $result));
    });

    return $app;
?>
