<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f9619daa62ee6656d7565f3bc51bbbfcbe27f51cc1162c3766c068c637108beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
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
Felicitaciones
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"container page-content fg-dark\">
<div class=\"cell\">
   <div style=\"max-width: 30rem ! important;\" class=\"notify success\">
        <span class=\"notify-title\">Felicitaciones.</span>
        <span class=\"notify-text\">
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
        </span>
   </div>
</div>
<br>
<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\"><button class=\"button primary\">Inicio</button></a>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  65 => 20,  58 => 15,  55 => 14,  47 => 10,  39 => 6,  31 => 2,  11 => 1,);
    }
}
