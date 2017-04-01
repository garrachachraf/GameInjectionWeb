<?php

/* @EloboostedLogin/Default/login.html.twig */
class __TwigTemplate_14a5bf3ff9293d7f6d76f19e7d3cf39f2b5e65458c596c8b910aacfcc630cdc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daab71eb854f63d2b9c60a510378c02e77d8d11b3cc433c02144e17cba4161b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daab71eb854f63d2b9c60a510378c02e77d8d11b3cc433c02144e17cba4161b0->enter($__internal_daab71eb854f63d2b9c60a510378c02e77d8d11b3cc433c02144e17cba4161b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_9549ee73f2ff659b6be5415d31b0e0da6c2b38cbf8ee69ba3c85f943be0aebb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9549ee73f2ff659b6be5415d31b0e0da6c2b38cbf8ee69ba3c85f943be0aebb9->enter($__internal_9549ee73f2ff659b6be5415d31b0e0da6c2b38cbf8ee69ba3c85f943be0aebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_daab71eb854f63d2b9c60a510378c02e77d8d11b3cc433c02144e17cba4161b0->leave($__internal_daab71eb854f63d2b9c60a510378c02e77d8d11b3cc433c02144e17cba4161b0_prof);

        
        $__internal_9549ee73f2ff659b6be5415d31b0e0da6c2b38cbf8ee69ba3c85f943be0aebb9->leave($__internal_9549ee73f2ff659b6be5415d31b0e0da6c2b38cbf8ee69ba3c85f943be0aebb9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7d991cac6d7e77bafbe3126cae7aa53fb6837fc455fb59b9382dacba4f089a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7d991cac6d7e77bafbe3126cae7aa53fb6837fc455fb59b9382dacba4f089a->enter($__internal_ca7d991cac6d7e77bafbe3126cae7aa53fb6837fc455fb59b9382dacba4f089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9a2d985623c28d658781fcce939dfec267b99506e06d1af41e572aa167558bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a2d985623c28d658781fcce939dfec267b99506e06d1af41e572aa167558bc->enter($__internal_f9a2d985623c28d658781fcce939dfec267b99506e06d1af41e572aa167558bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <section class=\"login\">
        <article>

            ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "
            <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <button type=\"submit\">login</button>
            </form>

        </article>
    </section>
";
        
        $__internal_f9a2d985623c28d658781fcce939dfec267b99506e06d1af41e572aa167558bc->leave($__internal_f9a2d985623c28d658781fcce939dfec267b99506e06d1af41e572aa167558bc_prof);

        
        $__internal_ca7d991cac6d7e77bafbe3126cae7aa53fb6837fc455fb59b9382dacba4f089a->leave($__internal_ca7d991cac6d7e77bafbe3126cae7aa53fb6837fc455fb59b9382dacba4f089a_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedLogin/Default/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  60 => 9,  57 => 8,  51 => 6,  49 => 5,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <section class=\"login\">
        <article>

            {% if error %}
                <div>{{ error.message }}</div>
            {% endif %}

            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <button type=\"submit\">login</button>
            </form>

        </article>
    </section>
{% endblock %}
", "@EloboostedLogin/Default/login.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
