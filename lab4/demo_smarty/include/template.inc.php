<?php

    /**
     * @param string $templateName
     * @param array $vars
     * @return string
     */
    function getView($templateName, $vars)
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir(TEMPLATE_DIR);
        $smarty->setCompileDir(TEMPLATE_C_DIR);
        
        $smarty->assign($vars);
        return $smarty->fetch($templateName);
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