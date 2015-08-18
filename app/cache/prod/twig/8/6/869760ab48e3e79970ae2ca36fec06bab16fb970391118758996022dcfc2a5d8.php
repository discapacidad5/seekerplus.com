<?php

/* ::base.html.twig */
class __TwigTemplate_869760ab48e3e79970ae2ca36fec06bab16fb970391118758996022dcfc2a5d8 extends Twig_Template
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
        // line 141
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
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 139
        echo "    </body>
";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"app-bar fixed-top\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"
\t\t\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\"
\t\tsrc=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> SeekerPlus
\t</a> <span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t<ul class=\"app-bar-menu\">
\t\t<li data-flexorder=\"1\" data-flexorderorigin=\"0\">
\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("app");
        echo "\"><span class=\"mif-display\"></span> App</a>
\t\t</li>
\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\">
\t\t\t<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("servicios");
        echo "\"><span class=\"mif-tags\"></span> Servicios</a>
\t\t</li>
\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\">
\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\"><span class=\"mif-contacts-mail\"></span> Contactenos</a>
\t\t</li>
\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\">
\t\t\t<a href=\"\"><span class=\"mif-question\"></span> Ayuda</a>
\t\t</li>
\t</ul>\t\t
</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "information"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify info\">
\t       <span class=\"notify-title\">Tenga en Cuenta</span>
\t       <span class=\"notify-text\">";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify success\">
\t       <span class=\"notify-title\">Felicitaciones</span>
\t       <span class=\"notify-text\">";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 69
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify alert\">
\t       <span class=\"notify-title\">Error</span>
\t       <span class=\"notify-text\">";
            // line 72
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 77
            echo "    <div class=\"container page-content fg-dark\" style=\"margin-bottom: -3rem;\">
\t    <div class=\"notify warning\">
\t       <span class=\"notify-title\">Cuidado !</span>
\t       <span class=\"notify-text\">";
            // line 80
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
\t     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "<footer style=\"background-color: #323232;margin-top:3rem\">
    <div class=\"container\">
        <div class=\"padding20\">
            <div class=\"grid responsive\">
                <div class=\"row cells4\">
                    <div class=\"fg-white  cell colspan2 padding20 no-padding-top no-padding-bottom\">
                        <h1 class=\"padding10 text-shadow\">Veloz, Sencillo y exacto !</h1>
                        <br>
                        <h4>Descárgala ahora:</h4>
                        <span style=\"font-size: 6rem;\" class=\"mif-mobile\"></span>
\t\t\t\t\t\t   <a href=\"https://play.google.com/store/apps/details?id=com.seekerimpulse.SeekerPlus\" target=\"_blank\"><img style=\"margin-right: 0.5rem;\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/android.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t></a>
                        <div class=\"bg-white bg-red fg-white padding10 align-center no-display\" id=\"job\">
                        </div>
                        <hr class=\"thin\" style=\"margin-top: 20px\">
                    </div>
                </div>
                <div class=\"fg-white row cells3\">
                    <div class=\"cell\">
                    \t<h4 class=\"padding10 text-shadow\">Social</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><a class=\"fg-white\" href=\"https://www.facebook.com/seekerpluscolombia\" target=\"_blank\"><span class=\"mif-facebook\"></span> Facebook</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"https://twitter.com/seekerimpulse\" target=\"_blank\"><span class=\"mif-twitter\"></span> Twitter</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"https://instagram.com/seekerimpulse/\" target=\"_blank\"><span class=\"mif-image\"></span> Instagram</a></li>
                    \t</ul>
                    </div>
                    <div class=\"cell\">
                    \t<h4 class=\"fg-white padding10 text-shadow\">Sobre Nosotros</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><span class=\"mif-users\"></span> Nuestro Equipo</li>
                    \t</ul>
                    </div>
                    <div class=\"cell\">
                    \t<h4 class=\"fg-white padding10 text-shadow\">Legal</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><a class=\"fg-white\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
        echo "\"><span class=\"mif-file-text\"></span> Condiciones de uso</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
        echo "\"><span class=\"mif-security\"></span> Política de privacidad</a></li>
                    \t</ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"fg-white align-center padding20 text-small\">
            SeekerPlus ® es una marca registrada de SeekerImpulse S.A.S<br>
\t\t\tCopyright © 2015 SeekerImpulse S.A.S Todos los derechos reservados.
\t\t<a href=\"mailto:info@seekerimpulse.co\">SeekerImpulse S.A.S</a>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 125,  322 => 124,  294 => 99,  281 => 88,  278 => 87,  273 => 84,  263 => 80,  258 => 77,  254 => 76,  244 => 72,  239 => 69,  235 => 68,  225 => 64,  220 => 61,  216 => 60,  206 => 56,  201 => 53,  197 => 52,  194 => 51,  182 => 42,  176 => 39,  170 => 36,  162 => 31,  156 => 28,  153 => 27,  150 => 26,  145 => 139,  143 => 87,  140 => 86,  138 => 51,  135 => 50,  132 => 26,  129 => 25,  124 => 22,  119 => 15,  114 => 10,  109 => 8,  104 => 7,  100 => 141,  98 => 25,  94 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
