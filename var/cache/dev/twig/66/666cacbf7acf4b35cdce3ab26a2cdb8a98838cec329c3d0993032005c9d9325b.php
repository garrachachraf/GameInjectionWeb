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
        $__internal_d561dc9a800554a98c14b13610e17e01b189590b75a75fcccab0590b4a558baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d561dc9a800554a98c14b13610e17e01b189590b75a75fcccab0590b4a558baf->enter($__internal_d561dc9a800554a98c14b13610e17e01b189590b75a75fcccab0590b4a558baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c4b0136a6dc9f40c931e47d4aa88664ec3a06bc6bed81c5d42c7dfe5caab6cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b0136a6dc9f40c931e47d4aa88664ec3a06bc6bed81c5d42c7dfe5caab6cff->enter($__internal_c4b0136a6dc9f40c931e47d4aa88664ec3a06bc6bed81c5d42c7dfe5caab6cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d561dc9a800554a98c14b13610e17e01b189590b75a75fcccab0590b4a558baf->leave($__internal_d561dc9a800554a98c14b13610e17e01b189590b75a75fcccab0590b4a558baf_prof);

        
        $__internal_c4b0136a6dc9f40c931e47d4aa88664ec3a06bc6bed81c5d42c7dfe5caab6cff->leave($__internal_c4b0136a6dc9f40c931e47d4aa88664ec3a06bc6bed81c5d42c7dfe5caab6cff_prof);

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
