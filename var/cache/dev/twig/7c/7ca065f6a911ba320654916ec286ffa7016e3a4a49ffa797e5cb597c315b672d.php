<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_4005cef87cde3f72787362f4cee96f2cdf6ba2a779d892bb86d3c4e49172877c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4005cef87cde3f72787362f4cee96f2cdf6ba2a779d892bb86d3c4e49172877c->enter($__internal_4005cef87cde3f72787362f4cee96f2cdf6ba2a779d892bb86d3c4e49172877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fed5c2cabb44b842d37d89add9e45ab30a6335ea00baa727d01b73df769e9d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed5c2cabb44b842d37d89add9e45ab30a6335ea00baa727d01b73df769e9d44->enter($__internal_fed5c2cabb44b842d37d89add9e45ab30a6335ea00baa727d01b73df769e9d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4005cef87cde3f72787362f4cee96f2cdf6ba2a779d892bb86d3c4e49172877c->leave($__internal_4005cef87cde3f72787362f4cee96f2cdf6ba2a779d892bb86d3c4e49172877c_prof);

        
        $__internal_fed5c2cabb44b842d37d89add9e45ab30a6335ea00baa727d01b73df769e9d44->leave($__internal_fed5c2cabb44b842d37d89add9e45ab30a6335ea00baa727d01b73df769e9d44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
