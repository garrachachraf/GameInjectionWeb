<?php

/* @EloboostedLogin/Default/login.html.twig */
class __TwigTemplate_1f58c5b0a0740b18c6164a794ab86e5ff7709672969cd3a19832b15847a36f4a extends Twig_Template
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
        $__internal_6a8931d87bf69fdcc3e91bf45207134e914ac0fb4e856ac55e0597a8c08f498b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8931d87bf69fdcc3e91bf45207134e914ac0fb4e856ac55e0597a8c08f498b->enter($__internal_6a8931d87bf69fdcc3e91bf45207134e914ac0fb4e856ac55e0597a8c08f498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_e13b7b48ed4f1fbaea4d6ead6dd170d58fa12ad0722082d87bf01da031fe0d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13b7b48ed4f1fbaea4d6ead6dd170d58fa12ad0722082d87bf01da031fe0d17->enter($__internal_e13b7b48ed4f1fbaea4d6ead6dd170d58fa12ad0722082d87bf01da031fe0d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6a8931d87bf69fdcc3e91bf45207134e914ac0fb4e856ac55e0597a8c08f498b->leave($__internal_6a8931d87bf69fdcc3e91bf45207134e914ac0fb4e856ac55e0597a8c08f498b_prof);

        
        $__internal_e13b7b48ed4f1fbaea4d6ead6dd170d58fa12ad0722082d87bf01da031fe0d17->leave($__internal_e13b7b48ed4f1fbaea4d6ead6dd170d58fa12ad0722082d87bf01da031fe0d17_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cf64580d32509094162c6ce073f28a52d31055b29437dcd017cbdc27b81ad6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf64580d32509094162c6ce073f28a52d31055b29437dcd017cbdc27b81ad6d0->enter($__internal_cf64580d32509094162c6ce073f28a52d31055b29437dcd017cbdc27b81ad6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62dfc094df416156bf7a691b6f3be35b51fc32e7096cc250775955b713753a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dfc094df416156bf7a691b6f3be35b51fc32e7096cc250775955b713753a2e->enter($__internal_62dfc094df416156bf7a691b6f3be35b51fc32e7096cc250775955b713753a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62dfc094df416156bf7a691b6f3be35b51fc32e7096cc250775955b713753a2e->leave($__internal_62dfc094df416156bf7a691b6f3be35b51fc32e7096cc250775955b713753a2e_prof);

        
        $__internal_cf64580d32509094162c6ce073f28a52d31055b29437dcd017cbdc27b81ad6d0->leave($__internal_cf64580d32509094162c6ce073f28a52d31055b29437dcd017cbdc27b81ad6d0_prof);

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
", "@EloboostedLogin/Default/login.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
