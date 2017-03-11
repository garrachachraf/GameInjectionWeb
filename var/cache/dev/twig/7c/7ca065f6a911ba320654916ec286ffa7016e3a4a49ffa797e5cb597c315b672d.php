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
        $__internal_f5d9c0ea6c3aa087c882ef621b8409ecc6422f8cfe70bbbb822cb9ce881f1b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d9c0ea6c3aa087c882ef621b8409ecc6422f8cfe70bbbb822cb9ce881f1b31->enter($__internal_f5d9c0ea6c3aa087c882ef621b8409ecc6422f8cfe70bbbb822cb9ce881f1b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8707a3b5b2617d4ec86a35e034e18d27d119a5de60f1162a540450a005dc34d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8707a3b5b2617d4ec86a35e034e18d27d119a5de60f1162a540450a005dc34d5->enter($__internal_8707a3b5b2617d4ec86a35e034e18d27d119a5de60f1162a540450a005dc34d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f5d9c0ea6c3aa087c882ef621b8409ecc6422f8cfe70bbbb822cb9ce881f1b31->leave($__internal_f5d9c0ea6c3aa087c882ef621b8409ecc6422f8cfe70bbbb822cb9ce881f1b31_prof);

        
        $__internal_8707a3b5b2617d4ec86a35e034e18d27d119a5de60f1162a540450a005dc34d5->leave($__internal_8707a3b5b2617d4ec86a35e034e18d27d119a5de60f1162a540450a005dc34d5_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
