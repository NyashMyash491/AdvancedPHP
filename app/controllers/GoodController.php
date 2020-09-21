<?php


namespace app\controllers;


use app\models\Good;

class GoodController
{
    protected $actionDefault = 'all';

    public function run($action)
    {
        if (empty($action)) {
            $action = $this->actionDefault;
        }

        $action .= "Action";

        if (!method_exists($this, $action)) {
            return '404';
        }

        return $this->$action();
    }

    public function allAction()
    {
        $products = Good::getAll();
        return $this->render('goodAll', ['goods' => $products]);
    }

    public function oneAction()
    {
        $id = $this->getId();
        $product = Good::getOne($id);
        return $this->render('goodOne', ['good' => $product]);
    }

    public function updateAction()
    {
        /** @var Good $good */
        $good = Good::getOne(3);
        $good->name = '123gr23t';
        $good->save();
    }

    public function render($template, $params = [])
    {
        $content = $this->renderTmpl($template, $params);
        return $this->renderTmpl(
            'layouts/main',
            [
                'content' => $content
            ]
        );
    }

    public function renderTmpl($template, $params = [])
    {
        extract($params);
        ob_start();
        include dirname(__DIR__) . '/views/' . $template . '.php';
        return ob_get_clean();
    }

    protected function getId()
    {
        if (empty($_GET['id'])) {
            return 0;
        }

        return (int)$_GET['id'];
    }
}