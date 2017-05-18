<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ce089c3b0b38a2ef314ca364466736e8afe68162056a4f577463fef3e42ea8b extends Twig_Template
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
        $__internal_8f284db66352c39cce6cab3a09385562197a6b1414ba0c00d3971e0ee5af1520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f284db66352c39cce6cab3a09385562197a6b1414ba0c00d3971e0ee5af1520->enter($__internal_8f284db66352c39cce6cab3a09385562197a6b1414ba0c00d3971e0ee5af1520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b3e69b03bc314de312bd3da7b8e4f845e4fe2c0fe0b1cfc1d27e151f3fccef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e69b03bc314de312bd3da7b8e4f845e4fe2c0fe0b1cfc1d27e151f3fccef22->enter($__internal_b3e69b03bc314de312bd3da7b8e4f845e4fe2c0fe0b1cfc1d27e151f3fccef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f284db66352c39cce6cab3a09385562197a6b1414ba0c00d3971e0ee5af1520->leave($__internal_8f284db66352c39cce6cab3a09385562197a6b1414ba0c00d3971e0ee5af1520_prof);

        
        $__internal_b3e69b03bc314de312bd3da7b8e4f845e4fe2c0fe0b1cfc1d27e151f3fccef22->leave($__internal_b3e69b03bc314de312bd3da7b8e4f845e4fe2c0fe0b1cfc1d27e151f3fccef22_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
