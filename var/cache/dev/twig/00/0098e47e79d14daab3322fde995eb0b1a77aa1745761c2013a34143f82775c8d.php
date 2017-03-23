<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a8f5fd32080338a828ceb5d6ecefb5ac71707d377d368cb0d0eaa0c1672ca12a extends Twig_Template
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
        $__internal_6d49e94867f8911f973a1d16774745788c929469efbd969eb80b32066f1a7820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d49e94867f8911f973a1d16774745788c929469efbd969eb80b32066f1a7820->enter($__internal_6d49e94867f8911f973a1d16774745788c929469efbd969eb80b32066f1a7820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a17157cc6171e96d18896964fdbc8e58b340cb6d6fc7bff5d3b265e750e8d5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17157cc6171e96d18896964fdbc8e58b340cb6d6fc7bff5d3b265e750e8d5c9->enter($__internal_a17157cc6171e96d18896964fdbc8e58b340cb6d6fc7bff5d3b265e750e8d5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6d49e94867f8911f973a1d16774745788c929469efbd969eb80b32066f1a7820->leave($__internal_6d49e94867f8911f973a1d16774745788c929469efbd969eb80b32066f1a7820_prof);

        
        $__internal_a17157cc6171e96d18896964fdbc8e58b340cb6d6fc7bff5d3b265e750e8d5c9->leave($__internal_a17157cc6171e96d18896964fdbc8e58b340cb6d6fc7bff5d3b265e750e8d5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
