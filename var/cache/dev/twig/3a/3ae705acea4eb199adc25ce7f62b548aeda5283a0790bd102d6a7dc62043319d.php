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
        $__internal_4bc810957f10a8cb8b8d9c2f180c74274e38e9c04172cfb98c6b173885dcd7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc810957f10a8cb8b8d9c2f180c74274e38e9c04172cfb98c6b173885dcd7cb->enter($__internal_4bc810957f10a8cb8b8d9c2f180c74274e38e9c04172cfb98c6b173885dcd7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_2472b07ec205d9fd6f76f624fb02f1028aecf3b40443678f4383d3ba68c2aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2472b07ec205d9fd6f76f624fb02f1028aecf3b40443678f4383d3ba68c2aa1f->enter($__internal_2472b07ec205d9fd6f76f624fb02f1028aecf3b40443678f4383d3ba68c2aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4bc810957f10a8cb8b8d9c2f180c74274e38e9c04172cfb98c6b173885dcd7cb->leave($__internal_4bc810957f10a8cb8b8d9c2f180c74274e38e9c04172cfb98c6b173885dcd7cb_prof);

        
        $__internal_2472b07ec205d9fd6f76f624fb02f1028aecf3b40443678f4383d3ba68c2aa1f->leave($__internal_2472b07ec205d9fd6f76f624fb02f1028aecf3b40443678f4383d3ba68c2aa1f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6292c7f45530609e27e49b2b07b64c3656b47bedc481ba32e19096e570397e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6292c7f45530609e27e49b2b07b64c3656b47bedc481ba32e19096e570397e0d->enter($__internal_6292c7f45530609e27e49b2b07b64c3656b47bedc481ba32e19096e570397e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdccff782529589eeb1f752633520c70d509e896738ff54b276a5cb34d330109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdccff782529589eeb1f752633520c70d509e896738ff54b276a5cb34d330109->enter($__internal_cdccff782529589eeb1f752633520c70d509e896738ff54b276a5cb34d330109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cdccff782529589eeb1f752633520c70d509e896738ff54b276a5cb34d330109->leave($__internal_cdccff782529589eeb1f752633520c70d509e896738ff54b276a5cb34d330109_prof);

        
        $__internal_6292c7f45530609e27e49b2b07b64c3656b47bedc481ba32e19096e570397e0d->leave($__internal_6292c7f45530609e27e49b2b07b64c3656b47bedc481ba32e19096e570397e0d_prof);

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
