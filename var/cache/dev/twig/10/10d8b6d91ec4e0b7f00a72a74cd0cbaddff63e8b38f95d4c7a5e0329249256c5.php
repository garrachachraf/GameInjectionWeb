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
        $__internal_ff8f1519f08712263c2207d29e9db5aa106edb31d53f970301587ad96244339a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8f1519f08712263c2207d29e9db5aa106edb31d53f970301587ad96244339a->enter($__internal_ff8f1519f08712263c2207d29e9db5aa106edb31d53f970301587ad96244339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_16b3f1212f0b785b96c528afadecafb47aaa5027f392d30b1d37ddb47893f975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b3f1212f0b785b96c528afadecafb47aaa5027f392d30b1d37ddb47893f975->enter($__internal_16b3f1212f0b785b96c528afadecafb47aaa5027f392d30b1d37ddb47893f975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ff8f1519f08712263c2207d29e9db5aa106edb31d53f970301587ad96244339a->leave($__internal_ff8f1519f08712263c2207d29e9db5aa106edb31d53f970301587ad96244339a_prof);

        
        $__internal_16b3f1212f0b785b96c528afadecafb47aaa5027f392d30b1d37ddb47893f975->leave($__internal_16b3f1212f0b785b96c528afadecafb47aaa5027f392d30b1d37ddb47893f975_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2fe5c18e606596739b7a8978ec77986c8b804751746a55b2b479c560f6c44925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe5c18e606596739b7a8978ec77986c8b804751746a55b2b479c560f6c44925->enter($__internal_2fe5c18e606596739b7a8978ec77986c8b804751746a55b2b479c560f6c44925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_beb91b303f7aff5885f78fc1655b6cddf7993ff5e3e3c7b956fd17558586d3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb91b303f7aff5885f78fc1655b6cddf7993ff5e3e3c7b956fd17558586d3fe->enter($__internal_beb91b303f7aff5885f78fc1655b6cddf7993ff5e3e3c7b956fd17558586d3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_beb91b303f7aff5885f78fc1655b6cddf7993ff5e3e3c7b956fd17558586d3fe->leave($__internal_beb91b303f7aff5885f78fc1655b6cddf7993ff5e3e3c7b956fd17558586d3fe_prof);

        
        $__internal_2fe5c18e606596739b7a8978ec77986c8b804751746a55b2b479c560f6c44925->leave($__internal_2fe5c18e606596739b7a8978ec77986c8b804751746a55b2b479c560f6c44925_prof);

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
