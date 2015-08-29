<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3a5ea160da92413d2c49523986dda82fa8bfa005f41d1e52b727ee05ca52e9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
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
Registrarse
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Crear Cuenta en SeekerPlus.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
Crear Cuenta seekerplus
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
 ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"container page-content fg-dark\">
<h1><span class=\"mif-user-plus\"></span> Crear Cuenta</h1>
<br>
";
        // line 21
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

";
        // line 23
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true, "size" => "large", "label" => "Crear cuenta con Facebook"));
        echo "
<script>
  function goLogIn(){
\t  window.location = \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\";
  }
  function onFbInit() {
\t  if (typeof(FB) != 'undefined' && FB != null ) {
\t\t  FB.Event.subscribe('auth.statusChange', function(response) {
\t\t\t  setTimeout(goLogIn, 500);
\t\t  });
\t  }
  }
</script>
<br>
<br>
<br>
";
        // line 39
        $this->loadTemplate("UserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 39)->display($context);
        // line 40
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  105 => 39,  89 => 26,  83 => 23,  78 => 21,  73 => 18,  70 => 17,  64 => 15,  59 => 14,  56 => 13,  48 => 10,  40 => 6,  32 => 2,  11 => 1,);
    }
}
