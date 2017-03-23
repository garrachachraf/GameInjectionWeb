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
        $__internal_6d987b6bfa48410132115c88372a1966f87029a1b280eae5ecb264d19b5b0684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d987b6bfa48410132115c88372a1966f87029a1b280eae5ecb264d19b5b0684->enter($__internal_6d987b6bfa48410132115c88372a1966f87029a1b280eae5ecb264d19b5b0684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_78c751fd07a737b40703d50cab36d6b26bb8ab3595d2ade0232e3cbb402f747e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c751fd07a737b40703d50cab36d6b26bb8ab3595d2ade0232e3cbb402f747e->enter($__internal_78c751fd07a737b40703d50cab36d6b26bb8ab3595d2ade0232e3cbb402f747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6d987b6bfa48410132115c88372a1966f87029a1b280eae5ecb264d19b5b0684->leave($__internal_6d987b6bfa48410132115c88372a1966f87029a1b280eae5ecb264d19b5b0684_prof);

        
        $__internal_78c751fd07a737b40703d50cab36d6b26bb8ab3595d2ade0232e3cbb402f747e->leave($__internal_78c751fd07a737b40703d50cab36d6b26bb8ab3595d2ade0232e3cbb402f747e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_eebddd2af966ad84cbec38c3978c52ab6544a2e59df8dee123aa11277c356656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebddd2af966ad84cbec38c3978c52ab6544a2e59df8dee123aa11277c356656->enter($__internal_eebddd2af966ad84cbec38c3978c52ab6544a2e59df8dee123aa11277c356656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b32579fdd25e12b52ad8ba646fe4f3845cb3e588132386fc282e30111773d1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32579fdd25e12b52ad8ba646fe4f3845cb3e588132386fc282e30111773d1c9->enter($__internal_b32579fdd25e12b52ad8ba646fe4f3845cb3e588132386fc282e30111773d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b32579fdd25e12b52ad8ba646fe4f3845cb3e588132386fc282e30111773d1c9->leave($__internal_b32579fdd25e12b52ad8ba646fe4f3845cb3e588132386fc282e30111773d1c9_prof);

        
        $__internal_eebddd2af966ad84cbec38c3978c52ab6544a2e59df8dee123aa11277c356656->leave($__internal_eebddd2af966ad84cbec38c3978c52ab6544a2e59df8dee123aa11277c356656_prof);

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
