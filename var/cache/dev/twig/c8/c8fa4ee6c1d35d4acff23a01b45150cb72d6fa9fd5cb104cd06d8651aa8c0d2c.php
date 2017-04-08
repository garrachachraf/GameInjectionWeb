<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_c1cfa9d6c25a725c8c1cecf6a697161c149a9c6e4e533c70ccb8f7ff5a89c0ab extends Twig_Template
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
        $__internal_c4b620fb6606d6f2051b5c893b38582fd41f4062a07d2e98d0bca4f46bc45d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b620fb6606d6f2051b5c893b38582fd41f4062a07d2e98d0bca4f46bc45d92->enter($__internal_c4b620fb6606d6f2051b5c893b38582fd41f4062a07d2e98d0bca4f46bc45d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_1882df47679511e525440d6d3e57f22b849854bd135520e4140568ef9a6a1797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1882df47679511e525440d6d3e57f22b849854bd135520e4140568ef9a6a1797->enter($__internal_1882df47679511e525440d6d3e57f22b849854bd135520e4140568ef9a6a1797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c4b620fb6606d6f2051b5c893b38582fd41f4062a07d2e98d0bca4f46bc45d92->leave($__internal_c4b620fb6606d6f2051b5c893b38582fd41f4062a07d2e98d0bca4f46bc45d92_prof);

        
        $__internal_1882df47679511e525440d6d3e57f22b849854bd135520e4140568ef9a6a1797->leave($__internal_1882df47679511e525440d6d3e57f22b849854bd135520e4140568ef9a6a1797_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_78a4622537d3a814d204426d5cd6af17f0a4f9e17c18cab57718a0a02bd2d992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a4622537d3a814d204426d5cd6af17f0a4f9e17c18cab57718a0a02bd2d992->enter($__internal_78a4622537d3a814d204426d5cd6af17f0a4f9e17c18cab57718a0a02bd2d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90fa7178b5ea4356c6396ec64c8beaa39aa3af0c27c26c5fda0a3e6a101de5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fa7178b5ea4356c6396ec64c8beaa39aa3af0c27c26c5fda0a3e6a101de5e4->enter($__internal_90fa7178b5ea4356c6396ec64c8beaa39aa3af0c27c26c5fda0a3e6a101de5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90fa7178b5ea4356c6396ec64c8beaa39aa3af0c27c26c5fda0a3e6a101de5e4->leave($__internal_90fa7178b5ea4356c6396ec64c8beaa39aa3af0c27c26c5fda0a3e6a101de5e4_prof);

        
        $__internal_78a4622537d3a814d204426d5cd6af17f0a4f9e17c18cab57718a0a02bd2d992->leave($__internal_78a4622537d3a814d204426d5cd6af17f0a4f9e17c18cab57718a0a02bd2d992_prof);

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
", "EloboostedLoginBundle:Default:login.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle/Resources/views/Default/login.html.twig");
    }
}
