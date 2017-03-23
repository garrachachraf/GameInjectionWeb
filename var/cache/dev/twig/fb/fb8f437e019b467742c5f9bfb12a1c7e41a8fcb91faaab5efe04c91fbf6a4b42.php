<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_190c7ae920fba4f7cdf34a09b596cc3350025b69676bea14802627f63b109a22 extends Twig_Template
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
        $__internal_303a9fb6ab448b5e530c24734dd469b1a32afe4909ad84386c086f0c08e72eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303a9fb6ab448b5e530c24734dd469b1a32afe4909ad84386c086f0c08e72eb3->enter($__internal_303a9fb6ab448b5e530c24734dd469b1a32afe4909ad84386c086f0c08e72eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_73603fbc2d4e6555c37d2c9740bad983d8066fcadbbf04ff33d118bc42de42f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73603fbc2d4e6555c37d2c9740bad983d8066fcadbbf04ff33d118bc42de42f5->enter($__internal_73603fbc2d4e6555c37d2c9740bad983d8066fcadbbf04ff33d118bc42de42f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_303a9fb6ab448b5e530c24734dd469b1a32afe4909ad84386c086f0c08e72eb3->leave($__internal_303a9fb6ab448b5e530c24734dd469b1a32afe4909ad84386c086f0c08e72eb3_prof);

        
        $__internal_73603fbc2d4e6555c37d2c9740bad983d8066fcadbbf04ff33d118bc42de42f5->leave($__internal_73603fbc2d4e6555c37d2c9740bad983d8066fcadbbf04ff33d118bc42de42f5_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
