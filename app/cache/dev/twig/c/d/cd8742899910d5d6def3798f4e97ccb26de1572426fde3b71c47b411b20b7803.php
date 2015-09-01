<?php

/* AdsmanagerBundle:Ads:email.html.twig */
class __TwigTemplate_cd8742899910d5d6def3798f4e97ccb26de1572426fde3b71c47b411b20b7803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Ads:email.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 
Mensaje de
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    Mensaje a ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
    Fecha ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Ads:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 6,  37 => 5,  29 => 2,  11 => 1,);
    }
}
