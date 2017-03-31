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
        $__internal_b86c7f70fab6414ee7e4be11d9644589cd01db4d11d944b6067ecbade089b8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86c7f70fab6414ee7e4be11d9644589cd01db4d11d944b6067ecbade089b8a2->enter($__internal_b86c7f70fab6414ee7e4be11d9644589cd01db4d11d944b6067ecbade089b8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_ab4c7c34359b3fbac1ade588cb0a5a8186c7fda5df05465c624cbf5e6d58a557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4c7c34359b3fbac1ade588cb0a5a8186c7fda5df05465c624cbf5e6d58a557->enter($__internal_ab4c7c34359b3fbac1ade588cb0a5a8186c7fda5df05465c624cbf5e6d58a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b86c7f70fab6414ee7e4be11d9644589cd01db4d11d944b6067ecbade089b8a2->leave($__internal_b86c7f70fab6414ee7e4be11d9644589cd01db4d11d944b6067ecbade089b8a2_prof);

        
        $__internal_ab4c7c34359b3fbac1ade588cb0a5a8186c7fda5df05465c624cbf5e6d58a557->leave($__internal_ab4c7c34359b3fbac1ade588cb0a5a8186c7fda5df05465c624cbf5e6d58a557_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_47a3593b266ae9a14bc592516a3bf6034d0406a2ee4d64c0948dc44190f79d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a3593b266ae9a14bc592516a3bf6034d0406a2ee4d64c0948dc44190f79d15->enter($__internal_47a3593b266ae9a14bc592516a3bf6034d0406a2ee4d64c0948dc44190f79d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83bc58f7f02888d7c82d7c6e3d01afd1344944d6ba9d662a4c65033c424d57a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bc58f7f02888d7c82d7c6e3d01afd1344944d6ba9d662a4c65033c424d57a0->enter($__internal_83bc58f7f02888d7c82d7c6e3d01afd1344944d6ba9d662a4c65033c424d57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83bc58f7f02888d7c82d7c6e3d01afd1344944d6ba9d662a4c65033c424d57a0->leave($__internal_83bc58f7f02888d7c82d7c6e3d01afd1344944d6ba9d662a4c65033c424d57a0_prof);

        
        $__internal_47a3593b266ae9a14bc592516a3bf6034d0406a2ee4d64c0948dc44190f79d15->leave($__internal_47a3593b266ae9a14bc592516a3bf6034d0406a2ee4d64c0948dc44190f79d15_prof);

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
