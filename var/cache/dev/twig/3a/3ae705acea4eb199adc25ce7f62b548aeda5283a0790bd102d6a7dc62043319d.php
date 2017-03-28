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
        $__internal_91db66bab1e479d5226a36ac19a883626de90bc6897484a77c8233b241c4edb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91db66bab1e479d5226a36ac19a883626de90bc6897484a77c8233b241c4edb4->enter($__internal_91db66bab1e479d5226a36ac19a883626de90bc6897484a77c8233b241c4edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_5d171a55485dbe4905ca50555b15bbfaa7f579fb6b63a0a974976d6c70b16faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d171a55485dbe4905ca50555b15bbfaa7f579fb6b63a0a974976d6c70b16faf->enter($__internal_5d171a55485dbe4905ca50555b15bbfaa7f579fb6b63a0a974976d6c70b16faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_91db66bab1e479d5226a36ac19a883626de90bc6897484a77c8233b241c4edb4->leave($__internal_91db66bab1e479d5226a36ac19a883626de90bc6897484a77c8233b241c4edb4_prof);

        
        $__internal_5d171a55485dbe4905ca50555b15bbfaa7f579fb6b63a0a974976d6c70b16faf->leave($__internal_5d171a55485dbe4905ca50555b15bbfaa7f579fb6b63a0a974976d6c70b16faf_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a5ae6f401edd058db29561ec3d9e542fec1c3b9d16d5c00704c23de31361799b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ae6f401edd058db29561ec3d9e542fec1c3b9d16d5c00704c23de31361799b->enter($__internal_a5ae6f401edd058db29561ec3d9e542fec1c3b9d16d5c00704c23de31361799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_062ca7c6c9899030d7e6653e5e55b968ef3529816dd915d40d3803866137d80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062ca7c6c9899030d7e6653e5e55b968ef3529816dd915d40d3803866137d80d->enter($__internal_062ca7c6c9899030d7e6653e5e55b968ef3529816dd915d40d3803866137d80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_062ca7c6c9899030d7e6653e5e55b968ef3529816dd915d40d3803866137d80d->leave($__internal_062ca7c6c9899030d7e6653e5e55b968ef3529816dd915d40d3803866137d80d_prof);

        
        $__internal_a5ae6f401edd058db29561ec3d9e542fec1c3b9d16d5c00704c23de31361799b->leave($__internal_a5ae6f401edd058db29561ec3d9e542fec1c3b9d16d5c00704c23de31361799b_prof);

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
