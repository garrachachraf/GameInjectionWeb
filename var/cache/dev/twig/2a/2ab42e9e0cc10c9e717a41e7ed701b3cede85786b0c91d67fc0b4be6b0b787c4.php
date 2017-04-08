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
        $__internal_c7b42484939caad9a50f33ed94b81208d8bb2967904cb6da9fd5bb7fdec8445f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b42484939caad9a50f33ed94b81208d8bb2967904cb6da9fd5bb7fdec8445f->enter($__internal_c7b42484939caad9a50f33ed94b81208d8bb2967904cb6da9fd5bb7fdec8445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_f8cba6d7597c4c99b961f64df1bdb782937c5ea3abc0f5a48757f4a296a4eea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cba6d7597c4c99b961f64df1bdb782937c5ea3abc0f5a48757f4a296a4eea7->enter($__internal_f8cba6d7597c4c99b961f64df1bdb782937c5ea3abc0f5a48757f4a296a4eea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c7b42484939caad9a50f33ed94b81208d8bb2967904cb6da9fd5bb7fdec8445f->leave($__internal_c7b42484939caad9a50f33ed94b81208d8bb2967904cb6da9fd5bb7fdec8445f_prof);

        
        $__internal_f8cba6d7597c4c99b961f64df1bdb782937c5ea3abc0f5a48757f4a296a4eea7->leave($__internal_f8cba6d7597c4c99b961f64df1bdb782937c5ea3abc0f5a48757f4a296a4eea7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_315c9dfe7c02897382162437e9f1ac82ba3ed0587904fd804cd640586db98260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315c9dfe7c02897382162437e9f1ac82ba3ed0587904fd804cd640586db98260->enter($__internal_315c9dfe7c02897382162437e9f1ac82ba3ed0587904fd804cd640586db98260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efa01eb9fce9c28db10a22dcb5589b6e7b661c49421622c2cf4a18d3feadbf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa01eb9fce9c28db10a22dcb5589b6e7b661c49421622c2cf4a18d3feadbf36->enter($__internal_efa01eb9fce9c28db10a22dcb5589b6e7b661c49421622c2cf4a18d3feadbf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efa01eb9fce9c28db10a22dcb5589b6e7b661c49421622c2cf4a18d3feadbf36->leave($__internal_efa01eb9fce9c28db10a22dcb5589b6e7b661c49421622c2cf4a18d3feadbf36_prof);

        
        $__internal_315c9dfe7c02897382162437e9f1ac82ba3ed0587904fd804cd640586db98260->leave($__internal_315c9dfe7c02897382162437e9f1ac82ba3ed0587904fd804cd640586db98260_prof);

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
