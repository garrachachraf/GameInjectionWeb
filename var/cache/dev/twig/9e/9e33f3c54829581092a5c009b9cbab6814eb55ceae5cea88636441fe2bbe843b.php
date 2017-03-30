<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_aae46f8eea7b1b934c7e9f4ff54476d549734f330eaa08cf819c71d32fdfa4d7 extends Twig_Template
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
        $__internal_5d65801d404573b6970ce692f0a34caaa88b8861990648f6694c4f578c24adf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d65801d404573b6970ce692f0a34caaa88b8861990648f6694c4f578c24adf3->enter($__internal_5d65801d404573b6970ce692f0a34caaa88b8861990648f6694c4f578c24adf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_28ee258e4c0aa38a8f7f5825a8a30ac65f7ec2511fc00b981f754c3d8cd4084d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ee258e4c0aa38a8f7f5825a8a30ac65f7ec2511fc00b981f754c3d8cd4084d->enter($__internal_28ee258e4c0aa38a8f7f5825a8a30ac65f7ec2511fc00b981f754c3d8cd4084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_5d65801d404573b6970ce692f0a34caaa88b8861990648f6694c4f578c24adf3->leave($__internal_5d65801d404573b6970ce692f0a34caaa88b8861990648f6694c4f578c24adf3_prof);

        
        $__internal_28ee258e4c0aa38a8f7f5825a8a30ac65f7ec2511fc00b981f754c3d8cd4084d->leave($__internal_28ee258e4c0aa38a8f7f5825a8a30ac65f7ec2511fc00b981f754c3d8cd4084d_prof);

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
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
