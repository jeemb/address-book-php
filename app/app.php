<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/address.php";

    session_start();

    if (empty($_SESSION['address_list'])) {
        $_SESSION['address_list'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../view'
    ));

    $app["debug"] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('root.html.twig', array('addresses' => Contact::getAll()));
    });

    $app->post("/add", function() use ($app) {
        $name_input = $_POST['name'];
        $phone_input = $_POST['phone'];
        $address_input = $_POST['amount'];
        return $app['twig']->render('create.html.twig');
    });

    $app->get("/back_home", function() use ($app) {
        return $app['twig']->render('root.html.twig');
    });




    return $app;
?>
