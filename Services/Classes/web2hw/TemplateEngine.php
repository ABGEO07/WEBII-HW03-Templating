<?php

namespace web2hw;

class TemplateEngine
{
    private $_templatesPath;

    public function __construct($templatesPath = __DIR__ . '/../../../Templates')
    {
        $this->_templatesPath = $templatesPath;
    }

    public function render($template, $args = [])
    {
        if (substr($template, -13) !== '.template.php') {
            $template .= '.template.php';
        }

        $templatesPath = $this->_templatesPath;

        if (file_exists($templatesPath . '/' . $template)) {
            extract($args, EXTR_OVERWRITE);

            require_once "{$templatesPath}/{$template}";
        } else {
            die ("Template {$template} not found!");
        }
    }
}