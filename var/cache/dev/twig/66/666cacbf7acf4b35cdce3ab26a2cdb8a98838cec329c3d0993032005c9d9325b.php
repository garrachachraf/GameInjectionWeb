<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09a84480f5b09e23fc3b379d181aedc9692995c4ce1868e6aa3e41c5eabe9d05 extends Twig_Template
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
        $__internal_9f09cf71e8c5692a5363c408224c60384c825d6b04b31941c3d2aadaed6070d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f09cf71e8c5692a5363c408224c60384c825d6b04b31941c3d2aadaed6070d3->enter($__internal_9f09cf71e8c5692a5363c408224c60384c825d6b04b31941c3d2aadaed6070d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_cc58037d0839f543f5e8029e961306d291cc83b4be9955279d693725fa19efe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc58037d0839f543f5e8029e961306d291cc83b4be9955279d693725fa19efe5->enter($__internal_cc58037d0839f543f5e8029e961306d291cc83b4be9955279d693725fa19efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f09cf71e8c5692a5363c408224c60384c825d6b04b31941c3d2aadaed6070d3->leave($__internal_9f09cf71e8c5692a5363c408224c60384c825d6b04b31941c3d2aadaed6070d3_prof);

        
        $__internal_cc58037d0839f543f5e8029e961306d291cc83b4be9955279d693725fa19efe5->leave($__internal_cc58037d0839f543f5e8029e961306d291cc83b4be9955279d693725fa19efe5_prof);

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
