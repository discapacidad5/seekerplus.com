<?php

/* ::app.html.twig */
class __TwigTemplate_d73da21983ab8f67f69cbe5423c579f1fab0ef20408c7481d2c05601ae2a1ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    \t<meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    \t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
    \t<meta name=\"author\" content=\"SeekerImpulse S.A.S\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    \t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   \t \t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify/run_prettify.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ga.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 150
        echo "</html>";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    <div style=\"display: block !important;left: 0 !important;top: 0px !important;height: 100%;width: 100%;position: fixed;z-index: 1050;background: #fff;\"  id=\"load\" class=\"padding20\" data-close-button=\"true\" data-overlay=\"true\" data-overlay-color=\"op-dark\">
\t\t<div style=\"text-align: center;\"class=\"container\">
\t    \t<h1>
\t        \t<div class=\"cell padding20 bg-white\">
\t           \t\t<div data-role=\"preloader\" data-type=\"ring\" data-style=\"dark\" style=\"margin: 30px  auto\"></div>
\t            </div>
\t\t\t</h1>
\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\">
\t        \t<img style=\"width: 5rem; margin-right: 0.5rem;\" alt=\"\"
\t\t\t\t\tsrc=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">      
\t\t\t</a>     
\t        <p>
\t          Cargando ...
\t       </p>
\t    </div>
\t</div>
    ";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('footer', $context, $blocks);
        // line 142
        echo "<script>

\$(window).load(function () {
\t\$('#load').remove();
});
</script>
    </body>
";
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        // line 43
        echo "<div class=\"app-bar fixed-top\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;padding-left: 0.5rem;\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\"
\t\t\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\"
\t\tsrc=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
\t</a> <span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t<div style=\"display: block; float: left;\" class=\"input-control text\" data-role=\"input\">
\t    <input id=\"searchWord\" style=\"width: 20rem;padding-right: 1rem !important;background: #fff\" type=\"text\" placeholder=\"Buscar ...\">
\t    <button class=\"button\"><span class=\"mif-search\"></span></button>
\t</div>
\t<span style=\"margin-top: 1rem; margin-left: 1rem; font-size: 0.9rem;\" class=\"notify-icon mif-expand-more cities\" onclick=\"showCitiesDialog('one');\">Ciudades</span>
\t<ul class=\"app-bar-menu place-right\">
\t\t";
        // line 56
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "\t\t<li>
\t\t<a href=\"\" class=\"dropdown-toggle\"><span class=\"mif-user\"></span>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t\t<ul style=\"display: none;\" class=\"d-menu\" data-role=\"dropdown\">
\t\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\">
\t\t\t  <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><span class=\"mif-profile\"></span> Perfil</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\">
\t\t\t  <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("my_ads");
            echo "\"><span class=\"mif-file-text\"></span> Mis Anuncios</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\">
\t\t\t  <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\"><span class=\"mif-lock\"></span> Cambiar Contraseña</a> 
\t\t\t</li>
\t\t\t<li data-flexorder=\"5\" data-flexorderorigin=\"4\">
\t\t\t\t<a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"mif-exit\"></span> Salir</a> 
\t\t\t</li>
\t\t</ul>
\t\t</li>
\t</ul>
\t";
        } else {
            // line 76
            echo "
\t<li style=\"padding-left: 2rem;\">
\t\t<div class=\"app-bar-element\">
\t\t\t<a class=\"dropdown-toggle fg-white\"><span class=\"mif-user\"></span>
\t\t\t Mi Cuenta
\t\t\t</a>
\t\t\t<div style=\"display: none;width: 10rem;\"
\t\t\t\tclass=\"app-bar-drop-container bg-white fg-dark place-right\"
\t\t\t\tdata-role=\"dropdown\" data-no-close=\"true\">
\t\t\t\t<div class=\"padding10\">
\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t<a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button class=\"button success\">Iniciar Sesión</button></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h5>¿No dispones de una cuenta en SeekerPlus? 
\t\t\t\t\t\t<a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Regístrate ahora</a>
\t\t\t\t\t</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</li>
\t</ul>
\t";
        }
        // line 98
        echo "\t\t
</div>
";
    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "information"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 104
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify info\">
\t       <span class=\"notify-title\">Tenga en Cuenta</span>
\t       <span class=\"notify-text\">";
            // line 107
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 112
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify success\">
\t       <span class=\"notify-title\">Felicitaciones</span>
\t       <span class=\"notify-text\">";
            // line 115
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 120
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify alert\">
\t       <span class=\"notify-title\">Error</span>
\t       <span class=\"notify-text\">";
            // line 123
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 128
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify warning\">
\t       <span class=\"notify-title\">Cuidado !</span>
\t       <span class=\"notify-text\">";
            // line 131
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
";
    }

    // line 138
    public function block_footer($context, array $blocks = array())
    {
        // line 139
        echo "<footer>
</footer>
";
    }

    public function getTemplateName()
    {
        return "::app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 139,  361 => 138,  356 => 135,  346 => 131,  341 => 128,  337 => 127,  327 => 123,  322 => 120,  318 => 119,  308 => 115,  303 => 112,  299 => 111,  289 => 107,  284 => 104,  280 => 103,  277 => 102,  271 => 98,  260 => 90,  254 => 87,  241 => 76,  232 => 70,  226 => 67,  220 => 64,  214 => 61,  208 => 58,  205 => 57,  203 => 56,  191 => 47,  185 => 44,  182 => 43,  179 => 42,  168 => 142,  166 => 138,  163 => 137,  161 => 102,  158 => 101,  156 => 42,  146 => 35,  141 => 33,  132 => 26,  129 => 25,  124 => 22,  119 => 15,  114 => 10,  109 => 8,  104 => 7,  100 => 150,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
