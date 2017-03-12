<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_7970764121d74cb8e404a26fd02591aaea8de1ef4ec815dcadc83cb1da11a33e extends Twig_Template
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
        $__internal_a65bcc1fd6e1c5bed50209155de5a73ce2885bba94f62c90506137e00fc9fb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65bcc1fd6e1c5bed50209155de5a73ce2885bba94f62c90506137e00fc9fb4a->enter($__internal_a65bcc1fd6e1c5bed50209155de5a73ce2885bba94f62c90506137e00fc9fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_84ec1d8c5c86fd17aa58d99bf6b526dffa7df109fa409b365f577b47ce0d808d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ec1d8c5c86fd17aa58d99bf6b526dffa7df109fa409b365f577b47ce0d808d->enter($__internal_84ec1d8c5c86fd17aa58d99bf6b526dffa7df109fa409b365f577b47ce0d808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a65bcc1fd6e1c5bed50209155de5a73ce2885bba94f62c90506137e00fc9fb4a->leave($__internal_a65bcc1fd6e1c5bed50209155de5a73ce2885bba94f62c90506137e00fc9fb4a_prof);

        
        $__internal_84ec1d8c5c86fd17aa58d99bf6b526dffa7df109fa409b365f577b47ce0d808d->leave($__internal_84ec1d8c5c86fd17aa58d99bf6b526dffa7df109fa409b365f577b47ce0d808d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d166bf0687c97899c843970ca1c9ea85ef7f17c36c73f774c8bb52c3d2a7b9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d166bf0687c97899c843970ca1c9ea85ef7f17c36c73f774c8bb52c3d2a7b9ce->enter($__internal_d166bf0687c97899c843970ca1c9ea85ef7f17c36c73f774c8bb52c3d2a7b9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efa191be059bb1af4c1cd8d6912aae8ff89df433fc57fe3d2dfa9410112ae807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa191be059bb1af4c1cd8d6912aae8ff89df433fc57fe3d2dfa9410112ae807->enter($__internal_efa191be059bb1af4c1cd8d6912aae8ff89df433fc57fe3d2dfa9410112ae807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efa191be059bb1af4c1cd8d6912aae8ff89df433fc57fe3d2dfa9410112ae807->leave($__internal_efa191be059bb1af4c1cd8d6912aae8ff89df433fc57fe3d2dfa9410112ae807_prof);

        
        $__internal_d166bf0687c97899c843970ca1c9ea85ef7f17c36c73f774c8bb52c3d2a7b9ce->leave($__internal_d166bf0687c97899c843970ca1c9ea85ef7f17c36c73f774c8bb52c3d2a7b9ce_prof);

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
", "EloboostedLoginBundle:Default:login.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/LoginBundle/Resources/views/Default/login.html.twig");
    }
}
