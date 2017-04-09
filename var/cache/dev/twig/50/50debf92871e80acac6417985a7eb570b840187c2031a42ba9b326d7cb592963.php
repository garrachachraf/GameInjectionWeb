<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_58f15e53e3c2d09b0a883039a1d69bb76ebf30b92c6bf7270fbaceaf0b8e4f79 extends Twig_Template
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
        $__internal_2d726088bc05347d1d49dfd2033701229a40fcf9fac269b350cd3d47d65d4f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d726088bc05347d1d49dfd2033701229a40fcf9fac269b350cd3d47d65d4f17->enter($__internal_2d726088bc05347d1d49dfd2033701229a40fcf9fac269b350cd3d47d65d4f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_dd46dcabe7561406d9c935792cf7bb330b2e54b67adfe9a08d4476b233947c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd46dcabe7561406d9c935792cf7bb330b2e54b67adfe9a08d4476b233947c31->enter($__internal_dd46dcabe7561406d9c935792cf7bb330b2e54b67adfe9a08d4476b233947c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_2d726088bc05347d1d49dfd2033701229a40fcf9fac269b350cd3d47d65d4f17->leave($__internal_2d726088bc05347d1d49dfd2033701229a40fcf9fac269b350cd3d47d65d4f17_prof);

        
        $__internal_dd46dcabe7561406d9c935792cf7bb330b2e54b67adfe9a08d4476b233947c31->leave($__internal_dd46dcabe7561406d9c935792cf7bb330b2e54b67adfe9a08d4476b233947c31_prof);

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
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
