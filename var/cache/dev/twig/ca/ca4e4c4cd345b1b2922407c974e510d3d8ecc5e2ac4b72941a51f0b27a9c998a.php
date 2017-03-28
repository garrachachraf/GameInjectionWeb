<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8a4e85fe726d7f92969022465857f30fed6680f80321a9ba03d0030f87720907 extends Twig_Template
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
        $__internal_0b3e5a92973ecd076b4d983db70a8b8e735efdf230269eaaef9bd5e4cb168abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3e5a92973ecd076b4d983db70a8b8e735efdf230269eaaef9bd5e4cb168abc->enter($__internal_0b3e5a92973ecd076b4d983db70a8b8e735efdf230269eaaef9bd5e4cb168abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_55c0cc5a43856cc4bec0f40d2eb95741e7984b21f1641907e4b9bd92e36650a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c0cc5a43856cc4bec0f40d2eb95741e7984b21f1641907e4b9bd92e36650a1->enter($__internal_55c0cc5a43856cc4bec0f40d2eb95741e7984b21f1641907e4b9bd92e36650a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0b3e5a92973ecd076b4d983db70a8b8e735efdf230269eaaef9bd5e4cb168abc->leave($__internal_0b3e5a92973ecd076b4d983db70a8b8e735efdf230269eaaef9bd5e4cb168abc_prof);

        
        $__internal_55c0cc5a43856cc4bec0f40d2eb95741e7984b21f1641907e4b9bd92e36650a1->leave($__internal_55c0cc5a43856cc4bec0f40d2eb95741e7984b21f1641907e4b9bd92e36650a1_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
