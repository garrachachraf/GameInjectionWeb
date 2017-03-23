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
        $__internal_1cdea41850687f128b3c26c526a6783bfb7bdfc590da85dd196e547fa47ba142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdea41850687f128b3c26c526a6783bfb7bdfc590da85dd196e547fa47ba142->enter($__internal_1cdea41850687f128b3c26c526a6783bfb7bdfc590da85dd196e547fa47ba142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        $__internal_6a1290669b7bb8839bb1635340cc0b4a1dbb1464f2664bbc95523381b4d385dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1290669b7bb8839bb1635340cc0b4a1dbb1464f2664bbc95523381b4d385dd->enter($__internal_6a1290669b7bb8839bb1635340cc0b4a1dbb1464f2664bbc95523381b4d385dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1cdea41850687f128b3c26c526a6783bfb7bdfc590da85dd196e547fa47ba142->leave($__internal_1cdea41850687f128b3c26c526a6783bfb7bdfc590da85dd196e547fa47ba142_prof);

        
        $__internal_6a1290669b7bb8839bb1635340cc0b4a1dbb1464f2664bbc95523381b4d385dd->leave($__internal_6a1290669b7bb8839bb1635340cc0b4a1dbb1464f2664bbc95523381b4d385dd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba052b5b697053efaeb2b0e06808e320341c2e1f5651116579af455e902e25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba052b5b697053efaeb2b0e06808e320341c2e1f5651116579af455e902e25d->enter($__internal_7ba052b5b697053efaeb2b0e06808e320341c2e1f5651116579af455e902e25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53cfa852663952ac00caf68ad1ce4462eecc417f3c4e6d7282912bb46f5ff7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cfa852663952ac00caf68ad1ce4462eecc417f3c4e6d7282912bb46f5ff7db->enter($__internal_53cfa852663952ac00caf68ad1ce4462eecc417f3c4e6d7282912bb46f5ff7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53cfa852663952ac00caf68ad1ce4462eecc417f3c4e6d7282912bb46f5ff7db->leave($__internal_53cfa852663952ac00caf68ad1ce4462eecc417f3c4e6d7282912bb46f5ff7db_prof);

        
        $__internal_7ba052b5b697053efaeb2b0e06808e320341c2e1f5651116579af455e902e25d->leave($__internal_7ba052b5b697053efaeb2b0e06808e320341c2e1f5651116579af455e902e25d_prof);

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
