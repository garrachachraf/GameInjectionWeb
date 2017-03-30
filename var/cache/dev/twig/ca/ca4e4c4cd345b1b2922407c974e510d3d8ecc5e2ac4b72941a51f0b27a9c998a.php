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
        $__internal_c6537663bfbb452efa5db938fdba2b0f0abf53921ca9dbdc2e998af37818667e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6537663bfbb452efa5db938fdba2b0f0abf53921ca9dbdc2e998af37818667e->enter($__internal_c6537663bfbb452efa5db938fdba2b0f0abf53921ca9dbdc2e998af37818667e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5ecba4822cf457be41250e37816ca433383063bf7111e27f28680e859dcefe75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecba4822cf457be41250e37816ca433383063bf7111e27f28680e859dcefe75->enter($__internal_5ecba4822cf457be41250e37816ca433383063bf7111e27f28680e859dcefe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c6537663bfbb452efa5db938fdba2b0f0abf53921ca9dbdc2e998af37818667e->leave($__internal_c6537663bfbb452efa5db938fdba2b0f0abf53921ca9dbdc2e998af37818667e_prof);

        
        $__internal_5ecba4822cf457be41250e37816ca433383063bf7111e27f28680e859dcefe75->leave($__internal_5ecba4822cf457be41250e37816ca433383063bf7111e27f28680e859dcefe75_prof);

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
