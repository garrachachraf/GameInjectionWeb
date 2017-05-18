<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0caffb23f8a478ee35200630245517ee3313b8ed417348ab34f59b0c96aeb713 extends Twig_Template
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
        $__internal_4cea6e3c63def38937b73056a2a2904b0c22179f594c8449dfc1146d5b1d9233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cea6e3c63def38937b73056a2a2904b0c22179f594c8449dfc1146d5b1d9233->enter($__internal_4cea6e3c63def38937b73056a2a2904b0c22179f594c8449dfc1146d5b1d9233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1e20baf1a19b9d3ed52d2beb530390821df0180527f99b18e4f72ad1e33ef89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e20baf1a19b9d3ed52d2beb530390821df0180527f99b18e4f72ad1e33ef89d->enter($__internal_1e20baf1a19b9d3ed52d2beb530390821df0180527f99b18e4f72ad1e33ef89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4cea6e3c63def38937b73056a2a2904b0c22179f594c8449dfc1146d5b1d9233->leave($__internal_4cea6e3c63def38937b73056a2a2904b0c22179f594c8449dfc1146d5b1d9233_prof);

        
        $__internal_1e20baf1a19b9d3ed52d2beb530390821df0180527f99b18e4f72ad1e33ef89d->leave($__internal_1e20baf1a19b9d3ed52d2beb530390821df0180527f99b18e4f72ad1e33ef89d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
