<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_43b66293b82ea959993c2106c1571408df5751a4480fd9fa0a77900ad2c3387c extends Twig_Template
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
        $__internal_c2dd5aad6a0148c9c89e2a64570bed37f7c3d926d753b3450eb739d4b68673ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dd5aad6a0148c9c89e2a64570bed37f7c3d926d753b3450eb739d4b68673ba->enter($__internal_c2dd5aad6a0148c9c89e2a64570bed37f7c3d926d753b3450eb739d4b68673ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_d2b7df619d94fc11a76e6225b0f4dc41d9cee4a002c5b104df4a6e79acb109bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b7df619d94fc11a76e6225b0f4dc41d9cee4a002c5b104df4a6e79acb109bd->enter($__internal_d2b7df619d94fc11a76e6225b0f4dc41d9cee4a002c5b104df4a6e79acb109bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_c2dd5aad6a0148c9c89e2a64570bed37f7c3d926d753b3450eb739d4b68673ba->leave($__internal_c2dd5aad6a0148c9c89e2a64570bed37f7c3d926d753b3450eb739d4b68673ba_prof);

        
        $__internal_d2b7df619d94fc11a76e6225b0f4dc41d9cee4a002c5b104df4a6e79acb109bd->leave($__internal_d2b7df619d94fc11a76e6225b0f4dc41d9cee4a002c5b104df4a6e79acb109bd_prof);

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
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/Applications/MAMP/htdocs/nn/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
