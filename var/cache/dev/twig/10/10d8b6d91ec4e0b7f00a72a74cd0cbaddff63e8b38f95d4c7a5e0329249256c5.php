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
        $__internal_8fa41abddfd91bcbffa5d7185fc682d51b84d140b77e63fe9ac7beca2298f7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa41abddfd91bcbffa5d7185fc682d51b84d140b77e63fe9ac7beca2298f7a2->enter($__internal_8fa41abddfd91bcbffa5d7185fc682d51b84d140b77e63fe9ac7beca2298f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_bb8bec93dfe5cfbaae058ae7c9ea2a1f58a62a681f5a1836f1232435f58d2c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8bec93dfe5cfbaae058ae7c9ea2a1f58a62a681f5a1836f1232435f58d2c38->enter($__internal_bb8bec93dfe5cfbaae058ae7c9ea2a1f58a62a681f5a1836f1232435f58d2c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8fa41abddfd91bcbffa5d7185fc682d51b84d140b77e63fe9ac7beca2298f7a2->leave($__internal_8fa41abddfd91bcbffa5d7185fc682d51b84d140b77e63fe9ac7beca2298f7a2_prof);

        
        $__internal_bb8bec93dfe5cfbaae058ae7c9ea2a1f58a62a681f5a1836f1232435f58d2c38->leave($__internal_bb8bec93dfe5cfbaae058ae7c9ea2a1f58a62a681f5a1836f1232435f58d2c38_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe53c4f4f35d710c35d31abc511d3b465214fb29956b565410f1f058627b74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe53c4f4f35d710c35d31abc511d3b465214fb29956b565410f1f058627b74c->enter($__internal_6fe53c4f4f35d710c35d31abc511d3b465214fb29956b565410f1f058627b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c341039268121e2d3e7716b0a5a65a5615fc6a7ed46c8cbd3d1f59ec92f6e283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c341039268121e2d3e7716b0a5a65a5615fc6a7ed46c8cbd3d1f59ec92f6e283->enter($__internal_c341039268121e2d3e7716b0a5a65a5615fc6a7ed46c8cbd3d1f59ec92f6e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c341039268121e2d3e7716b0a5a65a5615fc6a7ed46c8cbd3d1f59ec92f6e283->leave($__internal_c341039268121e2d3e7716b0a5a65a5615fc6a7ed46c8cbd3d1f59ec92f6e283_prof);

        
        $__internal_6fe53c4f4f35d710c35d31abc511d3b465214fb29956b565410f1f058627b74c->leave($__internal_6fe53c4f4f35d710c35d31abc511d3b465214fb29956b565410f1f058627b74c_prof);

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
