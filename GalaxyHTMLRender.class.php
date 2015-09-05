<?php
/*
 * Galaxy HTML Render
 * Works with PHP 5.4 and above.
 */
class GalaxyHTMLRender extends \Exception
{

    public static $DIR = '/view/'; /* template directory */
    public static $EXTENSION = '.php'; /* template extensions */

    /*
    * Private render handler
    * @param string $filename
    * @param array $params
    * @return rendered template
    */
    private function _render_($filename, $params)
    {
        $file = self::$DIR . str_replace('.', '/', $filename) . self::$EXTENSION;
        if (file_exists($file)) {
            ob_start();
            extract($params);
            require($file);
            return ob_get_clean();
        } else {
            throw new GalaxyHTMLRender('Error loading template: ' . $file);
        }
    }

    /*
    * External render method
    * @param string $filename
    * @param array $params
    * @return rendered template
    */
    public static function render($filename, $params = [])
    {
        return self::_render_($filename, $params);
    }
}
