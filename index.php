<?php

require "vendor/autoload.php";
require "classes/catalog-data.php";

// use Slim request and response classes
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// create custom configuration settings for slim app
// $config['displayErrorDetails'] = true
$config['db']['host']   = "localhost";
$config['db']['user']   = "root";
$config['db']['pass']   = "root";
$config['db']['dbname'] = "database";

// create app
$app = new \Slim\App(["settings" => $config]);
// get dependency injection container add-on php-view
$container = $app->getContainer();
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('./templates/'); };

// register PDO component on container
$container['db'] = function($container) {
  try {
    $db = $container['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'], $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (Exception $e) {
    echo "<p>Unable to connect to database.</p>";
    echo $e->getMessage();
    echo "<br />";
    exit;}  };

// Render PHP templates in routes
$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'landing.php');
})->setName('landing page');

$app->get('/about', function ($request, $response) {
    return $this->view->render($response, 'about.php');
})->setName('about');

$app->get('/stockists', function ($request, $response) {
    return $this->view->render($response, 'stockists.php');
})->setName('stockists');

$app->get('/home', function ($request, $response) {
    $data = new CatalogData;
    $data->setDb($this->db);
    $data->query("SELECT id, title, artist, price, img, front_page, url_title FROM books");
    $catalog = $data->full_catgalog_thumb_array();
    return $this->view->render($response, 'home.php', [
      'catalog' => $catalog 
      ]);
})->setName('home');

$app->get('/books', function ($request, $response) {
    $data = new CatalogData;
    $data->setDb($this->db);
    $data->query("SELECT id, title, artist, price, img, front_page, url_title FROM books");
    $catalog = $data->full_catgalog_thumb_array();
    return $this->view->render($response, 'books.php', [
      'catalog' => $catalog
    ]);
})->setName('books');

$app->get('/books/{title}', function ($request, $response, $args) {
  $title = strtolower(str_replace("-", " ", $args['title']));
  $data = new CatalogData;
  $data->setDb($this->db);
  $data->query("SELECT id, title, img, publish_date, artist, summary, blurb, pages, issu, see, price, url_title FROM books WHERE LOWER(url_title) = ? ");
  $data->bind(1, $title, PDO::PARAM_STR);
  $item = $data->single_book_array();

  if (empty($item)) {
    header("location:/books");
    exit;}

  return $this->view->render($response, 'details.php', [
    'item' => $item
    ]);
})->setName('details');

$app->get('/books/{title}/view', function ($request, $response, $args) {
  $title = strtolower(str_replace("-", " ", $args['title']));
  $data = new CatalogData;
  $data->setDb($this->db);
  $data->query("SELECT id, title, pages, issu, url_title FROM books WHERE LOWER(url_title) = ? ");
  $data->bind(1, $title, PDO::PARAM_STR);
  $item = $data->single_book_array();
  $page_imgs[] = explode("*", $item['pages']);

  if (empty($item)) {
    header("location:/books");
    exit;}

  return $this->view->render($response, 'reader.php', [
    'item' => $item,
    'page_imgs' => $page_imgs
    ]);
})->setName('reader');

// Run app
$app->run();






















