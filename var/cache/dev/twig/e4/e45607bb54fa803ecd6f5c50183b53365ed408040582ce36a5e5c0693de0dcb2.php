<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_abf8ec3816ef6f61bdc22e73f9f2d960e63f3d52aa2e8ed7775680e6dbdbf7a9 extends Twig_Template
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
        $__internal_6f6b8e6ee672f8dae4a102d472bc963949087b0826086ec366fac6a450a97953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6b8e6ee672f8dae4a102d472bc963949087b0826086ec366fac6a450a97953->enter($__internal_6f6b8e6ee672f8dae4a102d472bc963949087b0826086ec366fac6a450a97953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_477e0714263c79cbe6deab247739b83fbd35093eb4e61d8fee5bee2ebdb8eea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477e0714263c79cbe6deab247739b83fbd35093eb4e61d8fee5bee2ebdb8eea3->enter($__internal_477e0714263c79cbe6deab247739b83fbd35093eb4e61d8fee5bee2ebdb8eea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6f6b8e6ee672f8dae4a102d472bc963949087b0826086ec366fac6a450a97953->leave($__internal_6f6b8e6ee672f8dae4a102d472bc963949087b0826086ec366fac6a450a97953_prof);

        
        $__internal_477e0714263c79cbe6deab247739b83fbd35093eb4e61d8fee5bee2ebdb8eea3->leave($__internal_477e0714263c79cbe6deab247739b83fbd35093eb4e61d8fee5bee2ebdb8eea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
