<?php

    /**
     * @param string $templateName
     * @param array $vars
     * @return string
     */
    function getView($templateName, $vars)
    {
        $content = '';

        $templateFilePath = dirname(__FILE__) . "\\..\\template\\" . $templateName;
        if (file_exists($templateFilePath))
        {
            $content = file_get_contents($templateFilePath);

            if (!empty($vars))
            {
                foreach($vars as $key => $value)
                {
                    $placeholder = '{$' . $key . '}';
                    $content = str_replace($placeholder, $value, $content);
                }
            }
        }

        return $content;
    }

    /**
     * @param string $templateName
     * @param array $vars
     */
    function buildLayout($templateName, $vars)
    {
        $content = getView($templateName, $vars);

        $vars = array
        (
            'content' => $content
        );
        echo getView('layout.html', $vars);
    }