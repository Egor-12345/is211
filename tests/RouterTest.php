<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class ProductTest extends TestCase {
    public function test_router() {
        $router = new Router();
        $html = $router->route( "http://localhost/products" );
        $pos= mb_strpos($html, "Добавить в корзину");
        $this->assertNotEquals(false, $pos);
    }
    public function test_router1() {
        $router = new Router();
        $html = $router->route( "http://localhost" );
        $pos= mb_strpos($html, "Приглашаем в наше онлайн-кафе");
        $this->assertNotEquals(false, $pos);
    }
    public function test_router2() {
        $router = new Router();
        $html = $router->route( "http://localhost/orders" );
        $pos= mb_strpos($html, "Создание заказа");
        $this->assertNotEquals(false, $pos);
    }
}