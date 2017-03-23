<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_6f1945f5380eb860b2c95681297c1cc4dffeb791e52e4335e412f7415dc0cd74 extends Twig_Template
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
        $__internal_d2a52d23c206011ada9e3f215b6aa57e9e4599c6f759da2cf947b9d1b4ac1894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a52d23c206011ada9e3f215b6aa57e9e4599c6f759da2cf947b9d1b4ac1894->enter($__internal_d2a52d23c206011ada9e3f215b6aa57e9e4599c6f759da2cf947b9d1b4ac1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_a7318aeb2f7a318bdeb010233c2d8302196f423751ec33848aba88b31c0b398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7318aeb2f7a318bdeb010233c2d8302196f423751ec33848aba88b31c0b398b->enter($__internal_a7318aeb2f7a318bdeb010233c2d8302196f423751ec33848aba88b31c0b398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d2a52d23c206011ada9e3f215b6aa57e9e4599c6f759da2cf947b9d1b4ac1894->leave($__internal_d2a52d23c206011ada9e3f215b6aa57e9e4599c6f759da2cf947b9d1b4ac1894_prof);

        
        $__internal_a7318aeb2f7a318bdeb010233c2d8302196f423751ec33848aba88b31c0b398b->leave($__internal_a7318aeb2f7a318bdeb010233c2d8302196f423751ec33848aba88b31c0b398b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_16bcfba84cb5787db2074f93c46548e121153846740db5264f8d6d6a585bd7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bcfba84cb5787db2074f93c46548e121153846740db5264f8d6d6a585bd7b2->enter($__internal_16bcfba84cb5787db2074f93c46548e121153846740db5264f8d6d6a585bd7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c0c5dbcb3f55e266750bdd3ce3a7d61f9dbb6f7ab1b7bde286ea97a01072635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0c5dbcb3f55e266750bdd3ce3a7d61f9dbb6f7ab1b7bde286ea97a01072635->enter($__internal_3c0c5dbcb3f55e266750bdd3ce3a7d61f9dbb6f7ab1b7bde286ea97a01072635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c0c5dbcb3f55e266750bdd3ce3a7d61f9dbb6f7ab1b7bde286ea97a01072635->leave($__internal_3c0c5dbcb3f55e266750bdd3ce3a7d61f9dbb6f7ab1b7bde286ea97a01072635_prof);

        
        $__internal_16bcfba84cb5787db2074f93c46548e121153846740db5264f8d6d6a585bd7b2->leave($__internal_16bcfba84cb5787db2074f93c46548e121153846740db5264f8d6d6a585bd7b2_prof);

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
