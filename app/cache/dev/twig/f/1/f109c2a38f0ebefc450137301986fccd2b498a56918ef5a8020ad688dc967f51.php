<?php

/* AdsmanagerBundle:Product:newProductAds.html.twig */
class __TwigTemplate_f109c2a38f0ebefc450137301986fccd2b498a56918ef5a8020ad688dc967f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::app.html.twig", "AdsmanagerBundle:Product:newProductAds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
Crear Producto Anuncio
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

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/myJs.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">
<h1><span class=\"mif-tag\"></span> Nuevo Producto</h1><br>
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
        echo "

\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "

\t\t  <div class=\"cell\">
\t\t     <label>Imagen</label><br>
\t\t       <div class=\"input-control file\" data-role=\"input\">
\t\t           <input id=\"ads_image\" name=\"imagen\" type=\"file\" onchange=\"readURL(this,'newImages');\" readonly=\"readonly\">
\t\t           <button type=\"button\" class=\"button\"><span class=\"mif-folder\"></span></button>
\t\t       </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t    <img id=\"newImages\" class=\"marginFrame\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
        echo "\">
\t\t  </div><br>
\t\t    <div class=\"cell\">
    <div class=\"input-control modern text\" style=\"margin-bottom: 4rem;\">
      <input type=\"text\" id=\"price\" name=\"price\" required=\"required\" placeholder=\"Precio\"
              onkeyup=\"numberSeparator(this,this.value.charAt(this.value.length-1))\">
      <span class=\"label\">Obligatorio</span>
      <span class=\"informer\">Porfavor Ingrese el Precio</span>
    </div>
  </div>
";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Product:newProductAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 48,  115 => 44,  102 => 34,  89 => 24,  85 => 23,  80 => 21,  74 => 18,  71 => 17,  65 => 15,  60 => 14,  57 => 13,  49 => 10,  41 => 6,  33 => 2,  11 => 1,);
    }
}
