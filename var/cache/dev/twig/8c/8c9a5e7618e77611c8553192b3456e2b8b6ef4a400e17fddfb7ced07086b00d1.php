<?php

/* EloboostedFrontofficeBundle:tproduit:search.html.twig */
class __TwigTemplate_c787b17497a4f6aa7320e20a266931b6ae43b98efdf8e2767c7394f66f15617f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b5998f4760e3b71418f660e0a5ebc73802fe0e676b946f0571faf82c7e7a21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5998f4760e3b71418f660e0a5ebc73802fe0e676b946f0571faf82c7e7a21d->enter($__internal_7b5998f4760e3b71418f660e0a5ebc73802fe0e676b946f0571faf82c7e7a21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:search.html.twig"));

        $__internal_5bc371f5053635348c006609b4d707090afb6d7bd1febaa385299a010cad0de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc371f5053635348c006609b4d707090afb6d7bd1febaa385299a010cad0de2->enter($__internal_5bc371f5053635348c006609b4d707090afb6d7bd1febaa385299a010cad0de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:search.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Products"] ?? $this->getContext($context, "Products")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 2
            echo "    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"card\">
            <div class=\"card-img\" style=\"height:257px;width:360px; background-color: white\">
                <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\" height=\"100%\" width=\"100%\" alt=\"\"></a>
                <div class=\"category\"><span class=\"label label-success\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idCategorieProd", array()), "html", null, true);
            echo "</span></div>
                <div class=\"meta\"><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o\"></i> <span></span></a></div>
            </div>
            <div class=\"caption\">
                <h3 class=\"card-title\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelleProduit", array()), "html", null, true);
            echo "</a></h3>
                <ul><li>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "dateProduit", array())), "html", null, true);
            echo "</li></ul>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "etat", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7b5998f4760e3b71418f660e0a5ebc73802fe0e676b946f0571faf82c7e7a21d->leave($__internal_7b5998f4760e3b71418f660e0a5ebc73802fe0e676b946f0571faf82c7e7a21d_prof);

        
        $__internal_5bc371f5053635348c006609b4d707090afb6d7bd1febaa385299a010cad0de2->leave($__internal_5bc371f5053635348c006609b4d707090afb6d7bd1febaa385299a010cad0de2_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  56 => 11,  50 => 10,  44 => 7,  40 => 6,  34 => 5,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for t in Products %}
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"card\">
            <div class=\"card-img\" style=\"height:257px;width:360px; background-color: white\">
                <a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\"><img src=\"{{ path('get_product_img',{ 'id':t.idProduit }) }}\" height=\"100%\" width=\"100%\" alt=\"\"></a>
                <div class=\"category\"><span class=\"label label-success\">{{ t.idCategorieProd }}</span></div>
                <div class=\"meta\"><a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\"><i class=\"fa fa-heart-o\"></i> <span></span></a></div>
            </div>
            <div class=\"caption\">
                <h3 class=\"card-title\"><a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\">{{ t.libelleProduit }}</a></h3>
                <ul><li>{{ t.dateProduit | date }}</li></ul>
                <p>{{ t.etat }}</p>
            </div>
        </div>
    </div>

{% endfor %}", "EloboostedFrontofficeBundle:tproduit:search.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tproduit/search.html.twig");
    }
}
