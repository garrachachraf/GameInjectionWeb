<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_7280791fd4398be3e60866477770a48b4af04ae8db3808d7afba13ca717d2a4d extends Twig_Template
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
        $__internal_7188c69e1cebb32ac4b7041366c69a5caf7d192cd0ed83e751c62e21302b6505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7188c69e1cebb32ac4b7041366c69a5caf7d192cd0ed83e751c62e21302b6505->enter($__internal_7188c69e1cebb32ac4b7041366c69a5caf7d192cd0ed83e751c62e21302b6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fdebc22810de586b055c41ad0c0d9dfbbe4e11ec51c49909c8621228a5659799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdebc22810de586b055c41ad0c0d9dfbbe4e11ec51c49909c8621228a5659799->enter($__internal_fdebc22810de586b055c41ad0c0d9dfbbe4e11ec51c49909c8621228a5659799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7188c69e1cebb32ac4b7041366c69a5caf7d192cd0ed83e751c62e21302b6505->leave($__internal_7188c69e1cebb32ac4b7041366c69a5caf7d192cd0ed83e751c62e21302b6505_prof);

        
        $__internal_fdebc22810de586b055c41ad0c0d9dfbbe4e11ec51c49909c8621228a5659799->leave($__internal_fdebc22810de586b055c41ad0c0d9dfbbe4e11ec51c49909c8621228a5659799_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
