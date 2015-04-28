<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();
    $app['debug']= true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_pingpongtest", function() use($app) {
        $pingpongtest = new PingPongGenerator;
        $new_user_input = $pingpongtest->makePingPong($_GET['input']);
        return $app['twig']->render('view_pingpongtest.twig', array('results' => $new_user_input));
    });

    return $app;
?>
