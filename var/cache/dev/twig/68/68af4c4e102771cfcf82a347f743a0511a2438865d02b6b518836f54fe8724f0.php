<?php

/* @EloboostedLogin/Default/login.html.twig */
class __TwigTemplate_fd530538a822f03e92f9f84f9f03fa69585dab2c8154c8547925cdbf8f80bd3b extends Twig_Template
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
        $__internal_8f9c5aa38ce1a051ef957802304e434e9a0d4eb5cd8db8cd11fe54a91dfe555a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9c5aa38ce1a051ef957802304e434e9a0d4eb5cd8db8cd11fe54a91dfe555a->enter($__internal_8f9c5aa38ce1a051ef957802304e434e9a0d4eb5cd8db8cd11fe54a91dfe555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_8256102d4e93c0275d98bc3468fd112ba57d8a7a2b05a8d0246783ee35c0f1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8256102d4e93c0275d98bc3468fd112ba57d8a7a2b05a8d0246783ee35c0f1e0->enter($__internal_8256102d4e93c0275d98bc3468fd112ba57d8a7a2b05a8d0246783ee35c0f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8f9c5aa38ce1a051ef957802304e434e9a0d4eb5cd8db8cd11fe54a91dfe555a->leave($__internal_8f9c5aa38ce1a051ef957802304e434e9a0d4eb5cd8db8cd11fe54a91dfe555a_prof);

        
        $__internal_8256102d4e93c0275d98bc3468fd112ba57d8a7a2b05a8d0246783ee35c0f1e0->leave($__internal_8256102d4e93c0275d98bc3468fd112ba57d8a7a2b05a8d0246783ee35c0f1e0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d5a26d8d0266fefef5504e8e47f2f18f85c0de488c467f3f2d9f5407fdda5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d5a26d8d0266fefef5504e8e47f2f18f85c0de488c467f3f2d9f5407fdda5c->enter($__internal_c8d5a26d8d0266fefef5504e8e47f2f18f85c0de488c467f3f2d9f5407fdda5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdc19bd2061234526649efc9f496a9a33cf4c7f82ab2ea2d0f085a13a42fbea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc19bd2061234526649efc9f496a9a33cf4c7f82ab2ea2d0f085a13a42fbea5->enter($__internal_bdc19bd2061234526649efc9f496a9a33cf4c7f82ab2ea2d0f085a13a42fbea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bdc19bd2061234526649efc9f496a9a33cf4c7f82ab2ea2d0f085a13a42fbea5->leave($__internal_bdc19bd2061234526649efc9f496a9a33cf4c7f82ab2ea2d0f085a13a42fbea5_prof);

        
        $__internal_c8d5a26d8d0266fefef5504e8e47f2f18f85c0de488c467f3f2d9f5407fdda5c->leave($__internal_c8d5a26d8d0266fefef5504e8e47f2f18f85c0de488c467f3f2d9f5407fdda5c_prof);

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
