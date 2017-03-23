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
        $__internal_eb45accc02c80d1c026d05de95fda65736b777f161398735dc498a78f4a24526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb45accc02c80d1c026d05de95fda65736b777f161398735dc498a78f4a24526->enter($__internal_eb45accc02c80d1c026d05de95fda65736b777f161398735dc498a78f4a24526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_499baa7e2c021d469f38805211b838e5c654b14257ff358e2bb5fbcc690a3729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499baa7e2c021d469f38805211b838e5c654b14257ff358e2bb5fbcc690a3729->enter($__internal_499baa7e2c021d469f38805211b838e5c654b14257ff358e2bb5fbcc690a3729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eb45accc02c80d1c026d05de95fda65736b777f161398735dc498a78f4a24526->leave($__internal_eb45accc02c80d1c026d05de95fda65736b777f161398735dc498a78f4a24526_prof);

        
        $__internal_499baa7e2c021d469f38805211b838e5c654b14257ff358e2bb5fbcc690a3729->leave($__internal_499baa7e2c021d469f38805211b838e5c654b14257ff358e2bb5fbcc690a3729_prof);

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
