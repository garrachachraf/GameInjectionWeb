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
        $__internal_24274bcaf3764666b197726760569c796d524b1d4bb0cd35bd8cf761424695a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24274bcaf3764666b197726760569c796d524b1d4bb0cd35bd8cf761424695a1->enter($__internal_24274bcaf3764666b197726760569c796d524b1d4bb0cd35bd8cf761424695a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_610c17cd870ff04bd56f83be5661ab8044a49878a5ae3d34efa16506a2818f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610c17cd870ff04bd56f83be5661ab8044a49878a5ae3d34efa16506a2818f86->enter($__internal_610c17cd870ff04bd56f83be5661ab8044a49878a5ae3d34efa16506a2818f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_24274bcaf3764666b197726760569c796d524b1d4bb0cd35bd8cf761424695a1->leave($__internal_24274bcaf3764666b197726760569c796d524b1d4bb0cd35bd8cf761424695a1_prof);

        
        $__internal_610c17cd870ff04bd56f83be5661ab8044a49878a5ae3d34efa16506a2818f86->leave($__internal_610c17cd870ff04bd56f83be5661ab8044a49878a5ae3d34efa16506a2818f86_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b52c0250d6594e9b0c2986dfd1fe71d209c9eb02576bafd15a956680856984c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52c0250d6594e9b0c2986dfd1fe71d209c9eb02576bafd15a956680856984c4->enter($__internal_b52c0250d6594e9b0c2986dfd1fe71d209c9eb02576bafd15a956680856984c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e7e105d55305a0ad1d3f69a80d610a953a1bc1e1529f7244c918d35b4aa67a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7e105d55305a0ad1d3f69a80d610a953a1bc1e1529f7244c918d35b4aa67a8->enter($__internal_5e7e105d55305a0ad1d3f69a80d610a953a1bc1e1529f7244c918d35b4aa67a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e7e105d55305a0ad1d3f69a80d610a953a1bc1e1529f7244c918d35b4aa67a8->leave($__internal_5e7e105d55305a0ad1d3f69a80d610a953a1bc1e1529f7244c918d35b4aa67a8_prof);

        
        $__internal_b52c0250d6594e9b0c2986dfd1fe71d209c9eb02576bafd15a956680856984c4->leave($__internal_b52c0250d6594e9b0c2986dfd1fe71d209c9eb02576bafd15a956680856984c4_prof);

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
