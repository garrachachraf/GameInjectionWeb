<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_765b5c210bfbeeabcb33a32d36660b8d9118de8025107c004f1547245be25316 extends Twig_Template
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
        $__internal_27b7916c089dcf4d03d010283582b617cfd687f4c0e0a622171de37838efdb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b7916c089dcf4d03d010283582b617cfd687f4c0e0a622171de37838efdb70->enter($__internal_27b7916c089dcf4d03d010283582b617cfd687f4c0e0a622171de37838efdb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_ed4604ee1cded4572002ea5809e5bf68b728e88545e75d7d1f48a3847cd72811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4604ee1cded4572002ea5809e5bf68b728e88545e75d7d1f48a3847cd72811->enter($__internal_ed4604ee1cded4572002ea5809e5bf68b728e88545e75d7d1f48a3847cd72811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_27b7916c089dcf4d03d010283582b617cfd687f4c0e0a622171de37838efdb70->leave($__internal_27b7916c089dcf4d03d010283582b617cfd687f4c0e0a622171de37838efdb70_prof);

        
        $__internal_ed4604ee1cded4572002ea5809e5bf68b728e88545e75d7d1f48a3847cd72811->leave($__internal_ed4604ee1cded4572002ea5809e5bf68b728e88545e75d7d1f48a3847cd72811_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
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
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
