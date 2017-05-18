<?php

/* CunningsoftChatBundle:Chat:list.html.twig */
class __TwigTemplate_487e519fe5888de4299924e3832e7bc363dc4681455b6736da0fcf878202a56b extends Twig_Template
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
        $__internal_67e044bb8a12de1b10f5b3bcc00677ba830672ea94e49cd7f59acfefa5311b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e044bb8a12de1b10f5b3bcc00677ba830672ea94e49cd7f59acfefa5311b6a->enter($__internal_67e044bb8a12de1b10f5b3bcc00677ba830672ea94e49cd7f59acfefa5311b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CunningsoftChatBundle:Chat:list.html.twig"));

        $__internal_2a8ec0fd54ba6d951aa13a391610e05e465440caecb04973c45489f71c84f11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8ec0fd54ba6d951aa13a391610e05e465440caecb04973c45489f71c84f11b->enter($__internal_2a8ec0fd54ba6d951aa13a391610e05e465440caecb04973c45489f71c84f11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CunningsoftChatBundle:Chat:list.html.twig"));

        // line 1
        echo "<ul id=\"chat\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "    <li>
        <div class=\"author\"><span>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "author", array()), "html", null, true);
            echo "</span> <span class=\"date\">(";
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["message"], "insertDate", array()));
            echo ")</span></div>
        <div class=\"message\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</div>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
        
        $__internal_67e044bb8a12de1b10f5b3bcc00677ba830672ea94e49cd7f59acfefa5311b6a->leave($__internal_67e044bb8a12de1b10f5b3bcc00677ba830672ea94e49cd7f59acfefa5311b6a_prof);

        
        $__internal_2a8ec0fd54ba6d951aa13a391610e05e465440caecb04973c45489f71c84f11b->leave($__internal_2a8ec0fd54ba6d951aa13a391610e05e465440caecb04973c45489f71c84f11b_prof);

    }

    public function getTemplateName()
    {
        return "CunningsoftChatBundle:Chat:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  41 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id=\"chat\">
{% for message in messages %}
    <li>
        <div class=\"author\"><span>{{ message.author }}</span> <span class=\"date\">({{ message.insertDate|ago }})</span></div>
        <div class=\"message\">{{ message.message }}</div>
    </li>
{% endfor %}
</ul>
", "CunningsoftChatBundle:Chat:list.html.twig", "/Applications/MAMP/htdocs/nn/src/Cunningsoft/ChatBundle/Resources/views/Chat/list.html.twig");
    }
}
