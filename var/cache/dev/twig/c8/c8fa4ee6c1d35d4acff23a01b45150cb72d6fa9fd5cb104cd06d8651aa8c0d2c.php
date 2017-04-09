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
        $__internal_01a638af0f04a9cbeed9e02a734fd56a528caf741371fda0f9ab29598ecb1f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a638af0f04a9cbeed9e02a734fd56a528caf741371fda0f9ab29598ecb1f34->enter($__internal_01a638af0f04a9cbeed9e02a734fd56a528caf741371fda0f9ab29598ecb1f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_f071adcad50af89310e52fd2c5d81383cf7b4d01c2eddba5c131b4cd27982ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f071adcad50af89310e52fd2c5d81383cf7b4d01c2eddba5c131b4cd27982ee2->enter($__internal_f071adcad50af89310e52fd2c5d81383cf7b4d01c2eddba5c131b4cd27982ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_01a638af0f04a9cbeed9e02a734fd56a528caf741371fda0f9ab29598ecb1f34->leave($__internal_01a638af0f04a9cbeed9e02a734fd56a528caf741371fda0f9ab29598ecb1f34_prof);

        
        $__internal_f071adcad50af89310e52fd2c5d81383cf7b4d01c2eddba5c131b4cd27982ee2->leave($__internal_f071adcad50af89310e52fd2c5d81383cf7b4d01c2eddba5c131b4cd27982ee2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ea7ba29e04e73f2ecb5153d1f1683e95f417055e04375ff70c6ab604d5cb2add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7ba29e04e73f2ecb5153d1f1683e95f417055e04375ff70c6ab604d5cb2add->enter($__internal_ea7ba29e04e73f2ecb5153d1f1683e95f417055e04375ff70c6ab604d5cb2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8de2e3500be91fab0978e936156927876fdf1708444cf78ddac27ffc33848e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de2e3500be91fab0978e936156927876fdf1708444cf78ddac27ffc33848e6a->enter($__internal_8de2e3500be91fab0978e936156927876fdf1708444cf78ddac27ffc33848e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8de2e3500be91fab0978e936156927876fdf1708444cf78ddac27ffc33848e6a->leave($__internal_8de2e3500be91fab0978e936156927876fdf1708444cf78ddac27ffc33848e6a_prof);

        
        $__internal_ea7ba29e04e73f2ecb5153d1f1683e95f417055e04375ff70c6ab604d5cb2add->leave($__internal_ea7ba29e04e73f2ecb5153d1f1683e95f417055e04375ff70c6ab604d5cb2add_prof);

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
