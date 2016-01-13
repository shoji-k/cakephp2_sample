<?php
class RoutesTest extends CakeTestCase {

    public function exampleUrls() {
        return [
            ['新規投稿', '/posts/add', ['controller' => 'posts', 'action' => 'add']],
            ['一覧', '/one/list', ['controller' => 'posts', 'action' => 'index', 'user_account' => 'one']],
        ];
    }

    /**
     * @dataProvider exampleUrls
     */
    public function test配列形式からURL文字列に変換できること($name, $string, $array) {
        $this->assertEquals($string, Router::url($array), $name);
    }

    /**
     * @dataProvider exampleUrls
     */
    public function testURL文字列から逆引きできること($name, $string, $array) {
        $default = ['controller' => '', 'action' => '', 'pass' => [], 'named' => [], 'plugin' => null];
        $this->assertEquals(array_merge($default, $array), Router::parse($string), $name);
    }
}
