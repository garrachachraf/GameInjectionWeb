<?php

/* KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig */
class __TwigTemplate_c5e1a4f8eb5a714ea33bfe638d194eb89f9c2f0bb27683bc011df7d6c7cfef3b extends Twig_Template
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
        $__internal_6e84aa8eb1051edec74d1c254185dec96aba05d651ed8a192a7e65a862cf932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e84aa8eb1051edec74d1c254185dec96aba05d651ed8a192a7e65a862cf932e->enter($__internal_6e84aa8eb1051edec74d1c254185dec96aba05d651ed8a192a7e65a862cf932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig"));

        $__internal_71431cb30713be49e15a082272de34cb88d4d833a88f03b536570a19c4a58fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71431cb30713be49e15a082272de34cb88d4d833a88f03b536570a19c4a58fa6->enter($__internal_71431cb30713be49e15a082272de34cb88d4d833a88f03b536570a19c4a58fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig"));

        // line 13
        echo "
";
        // line 14
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 15
            echo "    <div class=\"ui pagination menu\">
        ";
            // line 16
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 17
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">
                <i class=\"angle double left icon\"></i>
            </a>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                echo "            <a class=\"item icon\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">
                <i class=\"angle left icon\"></i>
            </a>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 30
                    echo "                <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 32
                    echo "                <span class=\"active item\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 34
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
        ";
            // line 37
            if (array_key_exists("next", $context)) {
                // line 38
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">
                <i class=\"angle right icon\"></i>
            </a>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 44
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">
                <i class=\"angle right double icon\"></i>
            </a>
        ";
            }
            // line 48
            echo "    </div>
";
        }
        
        $__internal_6e84aa8eb1051edec74d1c254185dec96aba05d651ed8a192a7e65a862cf932e->leave($__internal_6e84aa8eb1051edec74d1c254185dec96aba05d651ed8a192a7e65a862cf932e_prof);

        
        $__internal_71431cb30713be49e15a082272de34cb88d4d833a88f03b536570a19c4a58fa6->leave($__internal_71431cb30713be49e15a082272de34cb88d4d833a88f03b536570a19c4a58fa6_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  105 => 44,  103 => 43,  100 => 42,  92 => 38,  90 => 37,  87 => 36,  80 => 34,  74 => 32,  66 => 30,  63 => 29,  59 => 28,  56 => 27,  48 => 23,  46 => 22,  43 => 21,  35 => 17,  33 => 16,  30 => 15,  28 => 14,  25 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Semantic UI Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Semantic UI CSS Toolkit
 * http://semantic-ui.com/collections/menu.html#pagination
 *
 * @author Valerian Dorcy <valerian.dorcy@gmail.com>
 */
#}

{% if pageCount > 1 %}
    <div class=\"ui pagination menu\">
        {% if first is defined and current != first %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                <i class=\"angle double left icon\"></i>
            </a>
        {% endif %}

        {% if previous is defined %}
            <a class=\"item icon\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                <i class=\"angle left icon\"></i>
            </a>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <a class=\"item\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            {% else %}
                <span class=\"active item\">{{ page }}</span>
            {% endif %}

        {% endfor %}

        {% if next is defined %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                <i class=\"angle right icon\"></i>
            </a>
        {% endif %}

        {% if last is defined and current != last %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                <i class=\"angle right double icon\"></i>
            </a>
        {% endif %}
    </div>
{% endif %}
", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/semantic_ui_pagination.html.twig");
    }
}