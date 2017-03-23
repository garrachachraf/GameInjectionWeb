<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_eb537096eddf85d57af54e83415d1df4bde12f64efd6db49c1e4cec53f0b4606 extends Twig_Template
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
        $__internal_cc8b52678b44bea2889155936229eea052c7108572e24373d4f8410930832686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8b52678b44bea2889155936229eea052c7108572e24373d4f8410930832686->enter($__internal_cc8b52678b44bea2889155936229eea052c7108572e24373d4f8410930832686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_30c826616949c67c159614f66cfa91a8c452dadec16e7ee20c1ac39be425c551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c826616949c67c159614f66cfa91a8c452dadec16e7ee20c1ac39be425c551->enter($__internal_30c826616949c67c159614f66cfa91a8c452dadec16e7ee20c1ac39be425c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cc8b52678b44bea2889155936229eea052c7108572e24373d4f8410930832686->leave($__internal_cc8b52678b44bea2889155936229eea052c7108572e24373d4f8410930832686_prof);

        
        $__internal_30c826616949c67c159614f66cfa91a8c452dadec16e7ee20c1ac39be425c551->leave($__internal_30c826616949c67c159614f66cfa91a8c452dadec16e7ee20c1ac39be425c551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
