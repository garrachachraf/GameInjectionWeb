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
        $__internal_27235d28428bdb72853e926162cb7b96463227e76371ef6f4d476cd3220f799d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27235d28428bdb72853e926162cb7b96463227e76371ef6f4d476cd3220f799d->enter($__internal_27235d28428bdb72853e926162cb7b96463227e76371ef6f4d476cd3220f799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_d1039a611807e0639f672c7d50322e16f89c000c594a3a0da6042d76659ca248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1039a611807e0639f672c7d50322e16f89c000c594a3a0da6042d76659ca248->enter($__internal_d1039a611807e0639f672c7d50322e16f89c000c594a3a0da6042d76659ca248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_27235d28428bdb72853e926162cb7b96463227e76371ef6f4d476cd3220f799d->leave($__internal_27235d28428bdb72853e926162cb7b96463227e76371ef6f4d476cd3220f799d_prof);

        
        $__internal_d1039a611807e0639f672c7d50322e16f89c000c594a3a0da6042d76659ca248->leave($__internal_d1039a611807e0639f672c7d50322e16f89c000c594a3a0da6042d76659ca248_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fabb75fbcc548fd54b6d8796c619faa4736941e725515f6a8b20098064dfa64f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fabb75fbcc548fd54b6d8796c619faa4736941e725515f6a8b20098064dfa64f->enter($__internal_fabb75fbcc548fd54b6d8796c619faa4736941e725515f6a8b20098064dfa64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e58c4ad83715a2b1d4f27abdd23f1589ffba7ce566a86a33033efceeef5ec22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e58c4ad83715a2b1d4f27abdd23f1589ffba7ce566a86a33033efceeef5ec22->enter($__internal_9e58c4ad83715a2b1d4f27abdd23f1589ffba7ce566a86a33033efceeef5ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e58c4ad83715a2b1d4f27abdd23f1589ffba7ce566a86a33033efceeef5ec22->leave($__internal_9e58c4ad83715a2b1d4f27abdd23f1589ffba7ce566a86a33033efceeef5ec22_prof);

        
        $__internal_fabb75fbcc548fd54b6d8796c619faa4736941e725515f6a8b20098064dfa64f->leave($__internal_fabb75fbcc548fd54b6d8796c619faa4736941e725515f6a8b20098064dfa64f_prof);

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
