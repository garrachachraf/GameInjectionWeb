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
        $__internal_c1716953130f23f92b88eec7159f96d67d9da690981f2304f7aefceebc7bcbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1716953130f23f92b88eec7159f96d67d9da690981f2304f7aefceebc7bcbea->enter($__internal_c1716953130f23f92b88eec7159f96d67d9da690981f2304f7aefceebc7bcbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_3bf4868568702ab115ba50efca8fa67b3af4f3723b71bfda1568b9b685040297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf4868568702ab115ba50efca8fa67b3af4f3723b71bfda1568b9b685040297->enter($__internal_3bf4868568702ab115ba50efca8fa67b3af4f3723b71bfda1568b9b685040297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c1716953130f23f92b88eec7159f96d67d9da690981f2304f7aefceebc7bcbea->leave($__internal_c1716953130f23f92b88eec7159f96d67d9da690981f2304f7aefceebc7bcbea_prof);

        
        $__internal_3bf4868568702ab115ba50efca8fa67b3af4f3723b71bfda1568b9b685040297->leave($__internal_3bf4868568702ab115ba50efca8fa67b3af4f3723b71bfda1568b9b685040297_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4ffd25d2d9ae773e3e20d30106ba02891850aac553ca3cdaa14d29f738bd69c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffd25d2d9ae773e3e20d30106ba02891850aac553ca3cdaa14d29f738bd69c9->enter($__internal_4ffd25d2d9ae773e3e20d30106ba02891850aac553ca3cdaa14d29f738bd69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1812306e9b514da8543ef733d8621474a32bd701e941cd03b810a7861f3fe7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1812306e9b514da8543ef733d8621474a32bd701e941cd03b810a7861f3fe7d->enter($__internal_c1812306e9b514da8543ef733d8621474a32bd701e941cd03b810a7861f3fe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1812306e9b514da8543ef733d8621474a32bd701e941cd03b810a7861f3fe7d->leave($__internal_c1812306e9b514da8543ef733d8621474a32bd701e941cd03b810a7861f3fe7d_prof);

        
        $__internal_4ffd25d2d9ae773e3e20d30106ba02891850aac553ca3cdaa14d29f738bd69c9->leave($__internal_4ffd25d2d9ae773e3e20d30106ba02891850aac553ca3cdaa14d29f738bd69c9_prof);

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
