<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 11/10/18
 * Time: 09:44
 */

//src/View/View.php
namespace View;

class View
{
    public function render(string $path, array $params) :string
    {
        extract($params);
        ob_start();
        require $path;
        $content = ob_get_clean();
        return $content;
    }
}