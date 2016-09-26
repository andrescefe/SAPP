<?php
namespace Core;
defined("APPPATH") OR die("Access denied");

class View extends App
{
    /**
     * @var
     */
    protected static $data;


    /**
     * @var
     */
    const VIEWS_PATH = "../App/Views/";

    /**
     * @var
     */
    const EXTENSION_TEMPLATES = "twig";


    /**
     * [render Views with data]
     * @param  [String]  [template name]
     * [html]    [render html]
     */
    public static function rend($template)
    {
        if(!file_exists(self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES))
        {
            throw new \Exception("Error: El archivo " . self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES . " no existe", 1);
        }

        echo self::$twig->render($template.'.'.self::EXTENSION_TEMPLATES, self::$data);

        //ob_start();
        //extract(self::$data);
        //include(self::VIEWS_PATH . $template . "." . self::EXTENSION_TEMPLATES);
        //$str = ob_get_contents();
        //ob_end_clean();
        //echo $str;
    }

    /**
     * [set Set Data form Views]
     * @param [string] $name  [key]
     * @param [mixed] $value [value]
     */
    public static function set($data)
    {
        self::$data = $data;
        //self::$data[$name] = $value;
    }
}
