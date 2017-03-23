<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_6f1945f5380eb860b2c95681297c1cc4dffeb791e52e4335e412f7415dc0cd74 extends Twig_Template
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
        $__internal_5592355a8d2e867a4379b2e0a139a9f7243b8f216f3bd1f7819975267a0ce9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5592355a8d2e867a4379b2e0a139a9f7243b8f216f3bd1f7819975267a0ce9b3->enter($__internal_5592355a8d2e867a4379b2e0a139a9f7243b8f216f3bd1f7819975267a0ce9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_b0f0f08c9020bf2d05a0a78e0074b9e3121b783c1f6fbf9f4a600dccd368ff96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f0f08c9020bf2d05a0a78e0074b9e3121b783c1f6fbf9f4a600dccd368ff96->enter($__internal_b0f0f08c9020bf2d05a0a78e0074b9e3121b783c1f6fbf9f4a600dccd368ff96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5592355a8d2e867a4379b2e0a139a9f7243b8f216f3bd1f7819975267a0ce9b3->leave($__internal_5592355a8d2e867a4379b2e0a139a9f7243b8f216f3bd1f7819975267a0ce9b3_prof);

        
        $__internal_b0f0f08c9020bf2d05a0a78e0074b9e3121b783c1f6fbf9f4a600dccd368ff96->leave($__internal_b0f0f08c9020bf2d05a0a78e0074b9e3121b783c1f6fbf9f4a600dccd368ff96_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb7fe4c0c361548dab802d15d9f74d2554550013c64a043c10b5230a231987a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb7fe4c0c361548dab802d15d9f74d2554550013c64a043c10b5230a231987a->enter($__internal_7fb7fe4c0c361548dab802d15d9f74d2554550013c64a043c10b5230a231987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3f1ca12897d1498e1d15c9c4534d573e8413de867edb55ca4d176dfc25ccf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f1ca12897d1498e1d15c9c4534d573e8413de867edb55ca4d176dfc25ccf19->enter($__internal_d3f1ca12897d1498e1d15c9c4534d573e8413de867edb55ca4d176dfc25ccf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3f1ca12897d1498e1d15c9c4534d573e8413de867edb55ca4d176dfc25ccf19->leave($__internal_d3f1ca12897d1498e1d15c9c4534d573e8413de867edb55ca4d176dfc25ccf19_prof);

        
        $__internal_7fb7fe4c0c361548dab802d15d9f74d2554550013c64a043c10b5230a231987a->leave($__internal_7fb7fe4c0c361548dab802d15d9f74d2554550013c64a043c10b5230a231987a_prof);

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
