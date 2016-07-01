<?php
use Pee\App;
chdir(dirname(__file__));
require_once '../vendor/autoload.php';
ini_set('log_errors', true);
ini_set('error_log', '../logs/log.log');
error_reporting((E_ALL)&~(E_NOTICE|E_USER_NOTICE|E_STRICT));
ini_set('display_errors', E_ALL);
$app = App::instance('../config.yml');
$pagesController = new PagesController($app);
$app->addRoute('GET /', [$pagesController, 'home']);
$app->run();

class PagesController
{
  private $twig;

  public function __construct(\Pee\App $app) {
    $this->twig = new \Twig_Environment(new \Twig_Loader_Filesystem($app['TEMPLATES']));
  }

  public function home(\Pee\App $app) {
    echo $this->twig->render("home.html");
  }
}
