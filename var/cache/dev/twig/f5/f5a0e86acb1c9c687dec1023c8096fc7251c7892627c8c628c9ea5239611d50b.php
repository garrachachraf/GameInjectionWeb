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
        $__internal_e21903a9c5f3404e9c7119f0f0cd75a1887970821a85757ad74b656e1030f45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21903a9c5f3404e9c7119f0f0cd75a1887970821a85757ad74b656e1030f45f->enter($__internal_e21903a9c5f3404e9c7119f0f0cd75a1887970821a85757ad74b656e1030f45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_5dcc8fff06d8c20f5340cb2d074bb2d8ff4af1dd0bd72d6fecda4d8abe108194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcc8fff06d8c20f5340cb2d074bb2d8ff4af1dd0bd72d6fecda4d8abe108194->enter($__internal_5dcc8fff06d8c20f5340cb2d074bb2d8ff4af1dd0bd72d6fecda4d8abe108194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_e21903a9c5f3404e9c7119f0f0cd75a1887970821a85757ad74b656e1030f45f->leave($__internal_e21903a9c5f3404e9c7119f0f0cd75a1887970821a85757ad74b656e1030f45f_prof);

        
        $__internal_5dcc8fff06d8c20f5340cb2d074bb2d8ff4af1dd0bd72d6fecda4d8abe108194->leave($__internal_5dcc8fff06d8c20f5340cb2d074bb2d8ff4af1dd0bd72d6fecda4d8abe108194_prof);

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
