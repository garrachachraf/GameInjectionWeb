<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_1c870f45f1889ecf5a1774460ed24dfffbc97ed647d84c3183c3c6a2b7401d2d extends Twig_Template
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
        $__internal_3153c77e68e6099c9f3563735ebe3ad1abc122ccb72e3ffd4a9a8e0c60bbd0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3153c77e68e6099c9f3563735ebe3ad1abc122ccb72e3ffd4a9a8e0c60bbd0b4->enter($__internal_3153c77e68e6099c9f3563735ebe3ad1abc122ccb72e3ffd4a9a8e0c60bbd0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_49f211ad505771e4e1212460df57c8be8d682c4c2cd5510eabd7d1b151bf96cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f211ad505771e4e1212460df57c8be8d682c4c2cd5510eabd7d1b151bf96cd->enter($__internal_49f211ad505771e4e1212460df57c8be8d682c4c2cd5510eabd7d1b151bf96cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3153c77e68e6099c9f3563735ebe3ad1abc122ccb72e3ffd4a9a8e0c60bbd0b4->leave($__internal_3153c77e68e6099c9f3563735ebe3ad1abc122ccb72e3ffd4a9a8e0c60bbd0b4_prof);

        
        $__internal_49f211ad505771e4e1212460df57c8be8d682c4c2cd5510eabd7d1b151bf96cd->leave($__internal_49f211ad505771e4e1212460df57c8be8d682c4c2cd5510eabd7d1b151bf96cd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5ea54c63009ca9979aa6e7e75ad5f9d33466fd651d7be73c3db8ea48e6df9af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea54c63009ca9979aa6e7e75ad5f9d33466fd651d7be73c3db8ea48e6df9af8->enter($__internal_5ea54c63009ca9979aa6e7e75ad5f9d33466fd651d7be73c3db8ea48e6df9af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e1408424559e195b69ed0f985df68114725a7260e0f565fcd5d265bea19130a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1408424559e195b69ed0f985df68114725a7260e0f565fcd5d265bea19130a->enter($__internal_6e1408424559e195b69ed0f985df68114725a7260e0f565fcd5d265bea19130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e1408424559e195b69ed0f985df68114725a7260e0f565fcd5d265bea19130a->leave($__internal_6e1408424559e195b69ed0f985df68114725a7260e0f565fcd5d265bea19130a_prof);

        
        $__internal_5ea54c63009ca9979aa6e7e75ad5f9d33466fd651d7be73c3db8ea48e6df9af8->leave($__internal_5ea54c63009ca9979aa6e7e75ad5f9d33466fd651d7be73c3db8ea48e6df9af8_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:login.html.twig";
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
", "EloboostedLoginBundle:Default:login.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle/Resources/views/Default/login.html.twig");
    }
}
