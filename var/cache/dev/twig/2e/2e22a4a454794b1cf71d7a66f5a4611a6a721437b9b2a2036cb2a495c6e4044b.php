<?php

/* NomayaSocialBundle:Buttons:linkedinButton.html.twig */
class __TwigTemplate_1f5968a4ecba5a22ca5ae3f1e55c620c38fdc74815462ad7032b0538bfddd355 extends Twig_Template
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
        $__internal_ce6f6ae81edfa3ebac3da45c662ab9f95e85ed0b9a267d800cdf952a51f95da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6f6ae81edfa3ebac3da45c662ab9f95e85ed0b9a267d800cdf952a51f95da8->enter($__internal_ce6f6ae81edfa3ebac3da45c662ab9f95e85ed0b9a267d800cdf952a51f95da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

        $__internal_cb390e1d60d2c46e580cdecdfca342fc645088ee1495d5f1388c7e364f8652ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb390e1d60d2c46e580cdecdfca342fc645088ee1495d5f1388c7e364f8652ff->enter($__internal_cb390e1d60d2c46e580cdecdfca342fc645088ee1495d5f1388c7e364f8652ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

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
        
        $__internal_ce6f6ae81edfa3ebac3da45c662ab9f95e85ed0b9a267d800cdf952a51f95da8->leave($__internal_ce6f6ae81edfa3ebac3da45c662ab9f95e85ed0b9a267d800cdf952a51f95da8_prof);

        
        $__internal_cb390e1d60d2c46e580cdecdfca342fc645088ee1495d5f1388c7e364f8652ff->leave($__internal_cb390e1d60d2c46e580cdecdfca342fc645088ee1495d5f1388c7e364f8652ff_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:linkedinButton.html.twig";
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
", "NomayaSocialBundle:Buttons:linkedinButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/linkedinButton.html.twig");
    }
}
