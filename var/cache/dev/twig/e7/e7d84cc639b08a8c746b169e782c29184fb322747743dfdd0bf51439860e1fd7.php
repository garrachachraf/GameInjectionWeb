<?php

/* NomayaSocialBundle:Buttons:linkedinButton.html.twig */
class __TwigTemplate_9b1d1d163d055e5119fa66876f91db5156078ac74a38213fd216f82b8793e513 extends Twig_Template
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
        $__internal_96e028b87f858a33d250c9908c8a9fdc5c1dcfaf6952c03ae28fb946718ceb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e028b87f858a33d250c9908c8a9fdc5c1dcfaf6952c03ae28fb946718ceb8a->enter($__internal_96e028b87f858a33d250c9908c8a9fdc5c1dcfaf6952c03ae28fb946718ceb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

        $__internal_e017d506828a62e2cbd6cee5ac6db24656a058598d3d4225ee26228557916cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e017d506828a62e2cbd6cee5ac6db24656a058598d3d4225ee26228557916cb0->enter($__internal_e017d506828a62e2cbd6cee5ac6db24656a058598d3d4225ee26228557916cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:linkedinButton.html.twig"));

        // line 1
        if (( !array_key_exists("url", $context) || (($context["url"] ?? $this->getContext($context, "url")) == null))) {
            // line 2
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "uri", array());
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
        echo twig_escape_filter($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), "html", null, true);
        echo "
</script>

 <script type=\"IN/Share\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" data-counter=\"";
        echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
        echo "\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_96e028b87f858a33d250c9908c8a9fdc5c1dcfaf6952c03ae28fb946718ceb8a->leave($__internal_96e028b87f858a33d250c9908c8a9fdc5c1dcfaf6952c03ae28fb946718ceb8a_prof);

        
        $__internal_e017d506828a62e2cbd6cee5ac6db24656a058598d3d4225ee26228557916cb0->leave($__internal_e017d506828a62e2cbd6cee5ac6db24656a058598d3d4225ee26228557916cb0_prof);

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
", "NomayaSocialBundle:Buttons:linkedinButton.html.twig", "/Applications/MAMP/htdocs/nn/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/linkedinButton.html.twig");
    }
}
