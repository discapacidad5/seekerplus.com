<?php

/* AdsmanagerBundle:AdsSearch:lista.html.twig */
class __TwigTemplate_d2f9ff1d4bc17f1bb6f15ab7096f01071c87837410778e0cdbf55163d4c4cb2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'busqueda' => array($this, 'block_busqueda'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('busqueda', $context, $blocks);
    }

    public function block_busqueda($context, array $blocks = array())
    {
        // line 2
        echo "\t
\t<ul >

\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "\t\t    <li><a style='cursor: pointer;' onclick=\"SaveSearh('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_ads_category", array("idCategory" => $this->getAttribute($context["item"], "id", array()), "idCity" => (isset($context["id_city"]) ? $context["id_city"] : $this->getContext($context, "id_city")), "range" => "0")), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : $this->getContext($context, "ads")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t    <li><a style='cursor: pointer;' onclick=\"SaveSearh('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adheadline", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad", array("idAd" => $this->getAttribute($context["item"], "id", array()), "idCity" => (isset($context["id_city"]) ? $context["id_city"] : $this->getContext($context, "id_city")))), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adheadline", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t    <li><a style='cursor: pointer;' onclick=\"SaveSearh('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_ad", array("idAd" => $this->getAttribute($context["item"], "idAd", array()), "idCity" => (isset($context["id_city"]) ? $context["id_city"] : $this->getContext($context, "id_city")))), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ul>    
<script src=\"/javascripts/application.js\" type=\"text/javascript\" charset=\"utf-8\" async defer>
\t
</script>
";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:AdsSearch:lista.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  71 => 12,  66 => 11,  53 => 9,  48 => 8,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
