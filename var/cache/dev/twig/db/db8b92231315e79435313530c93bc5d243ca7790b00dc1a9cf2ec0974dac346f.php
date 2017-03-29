<?php

/* @NomayaSocial/Buttons/linkedinButton.html.twig */
class __TwigTemplate_09379d76b0fb44c8d5c3682d880bc800761e53123ccae4db74a27fab948231d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02357e3d788f2ca0035951f4e3e42812fd913259b7e11e192e61292633644601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02357e3d788f2ca0035951f4e3e42812fd913259b7e11e192e61292633644601->enter($__internal_02357e3d788f2ca0035951f4e3e42812fd913259b7e11e192e61292633644601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/linkedinButton.html.twig"));

        $__internal_e0eb6c2a9da8dec942c512ade2aee27c73c01aa0a4183a384e6e6ee726df0b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eb6c2a9da8dec942c512ade2aee27c73c01aa0a4183a384e6e6ee726df0b24->enter($__internal_e0eb6c2a9da8dec942c512ade2aee27c73c01aa0a4183a384e6e6ee726df0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/linkedinButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array());
        }
        // line 4
        echo "
";
        // line 5
        ob_start();
        // line 6
        echo "
<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\">
  lang: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "
</script>

 <script type=\"IN/Share\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-counter=\"";
        echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
        echo "\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_02357e3d788f2ca0035951f4e3e42812fd913259b7e11e192e61292633644601->leave($__internal_02357e3d788f2ca0035951f4e3e42812fd913259b7e11e192e61292633644601_prof);

        
        $__internal_e0eb6c2a9da8dec942c512ade2aee27c73c01aa0a4183a384e6e6ee726df0b24->leave($__internal_e0eb6c2a9da8dec942c512ade2aee27c73c01aa0a4183a384e6e6ee726df0b24_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Buttons/linkedinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if url is not defined or url == null %}
    {% set url = app.request.uri %}
{% endif %}

{% spaceless %}

<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\">
  lang: {{ locale }}
</script>

 <script type=\"IN/Share\" data-url=\"{{ url }}\" data-counter=\"{{ counter }}\"></script>
{% endspaceless %}
", "@NomayaSocial/Buttons/linkedinButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\linkedinButton.html.twig");
    }
}
