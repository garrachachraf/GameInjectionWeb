<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_6aa6c4571bcd07db7fa9e18490ed96972658bbedc133dfccb7296b0bf7813666 extends Twig_Template
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
        $__internal_e8eb4e3e7310ddeebd398180332606ff24bdc9eb5d333b6ff2b76e4c4dcc427d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8eb4e3e7310ddeebd398180332606ff24bdc9eb5d333b6ff2b76e4c4dcc427d->enter($__internal_e8eb4e3e7310ddeebd398180332606ff24bdc9eb5d333b6ff2b76e4c4dcc427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_ce1f87437447786805bd279310b91b63d824d5e318bf7ccd1e2cd8c9dbf58721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1f87437447786805bd279310b91b63d824d5e318bf7ccd1e2cd8c9dbf58721->enter($__internal_ce1f87437447786805bd279310b91b63d824d5e318bf7ccd1e2cd8c9dbf58721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_e8eb4e3e7310ddeebd398180332606ff24bdc9eb5d333b6ff2b76e4c4dcc427d->leave($__internal_e8eb4e3e7310ddeebd398180332606ff24bdc9eb5d333b6ff2b76e4c4dcc427d_prof);

        
        $__internal_ce1f87437447786805bd279310b91b63d824d5e318bf7ccd1e2cd8c9dbf58721->leave($__internal_ce1f87437447786805bd279310b91b63d824d5e318bf7ccd1e2cd8c9dbf58721_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
