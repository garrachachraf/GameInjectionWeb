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
        $__internal_0dda545a1e957180cd2272e6983d75c450d7a44994073100c309e6406ae7658c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dda545a1e957180cd2272e6983d75c450d7a44994073100c309e6406ae7658c->enter($__internal_0dda545a1e957180cd2272e6983d75c450d7a44994073100c309e6406ae7658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_c94dca930eae0ff05a9ed0e41cc4e8cff21602b15362656552d732444594a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94dca930eae0ff05a9ed0e41cc4e8cff21602b15362656552d732444594a7e2->enter($__internal_c94dca930eae0ff05a9ed0e41cc4e8cff21602b15362656552d732444594a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0dda545a1e957180cd2272e6983d75c450d7a44994073100c309e6406ae7658c->leave($__internal_0dda545a1e957180cd2272e6983d75c450d7a44994073100c309e6406ae7658c_prof);

        
        $__internal_c94dca930eae0ff05a9ed0e41cc4e8cff21602b15362656552d732444594a7e2->leave($__internal_c94dca930eae0ff05a9ed0e41cc4e8cff21602b15362656552d732444594a7e2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1823c0fb7c16076f1e14aa323848b46577b660433d75d192042053002ebcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1823c0fb7c16076f1e14aa323848b46577b660433d75d192042053002ebcd4->enter($__internal_3a1823c0fb7c16076f1e14aa323848b46577b660433d75d192042053002ebcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71492d9dd0b5cb04344f9859aa2654c75e86e7f17359dcc77d1ab16cbff93e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71492d9dd0b5cb04344f9859aa2654c75e86e7f17359dcc77d1ab16cbff93e12->enter($__internal_71492d9dd0b5cb04344f9859aa2654c75e86e7f17359dcc77d1ab16cbff93e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71492d9dd0b5cb04344f9859aa2654c75e86e7f17359dcc77d1ab16cbff93e12->leave($__internal_71492d9dd0b5cb04344f9859aa2654c75e86e7f17359dcc77d1ab16cbff93e12_prof);

        
        $__internal_3a1823c0fb7c16076f1e14aa323848b46577b660433d75d192042053002ebcd4->leave($__internal_3a1823c0fb7c16076f1e14aa323848b46577b660433d75d192042053002ebcd4_prof);

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
