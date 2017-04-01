<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8950311a0a97302ffc2cd978334442161deaa6c691d2e4ae6a776e160789542b extends Twig_Template
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
        $__internal_43c9725923110310a5017daddbd531440760d0bf31c756b719b4e9f542bc223b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c9725923110310a5017daddbd531440760d0bf31c756b719b4e9f542bc223b->enter($__internal_43c9725923110310a5017daddbd531440760d0bf31c756b719b4e9f542bc223b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_821f1986250ea6576c39f6a372939d020f1364f57b24427ca02b01227a9c8084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821f1986250ea6576c39f6a372939d020f1364f57b24427ca02b01227a9c8084->enter($__internal_821f1986250ea6576c39f6a372939d020f1364f57b24427ca02b01227a9c8084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_43c9725923110310a5017daddbd531440760d0bf31c756b719b4e9f542bc223b->leave($__internal_43c9725923110310a5017daddbd531440760d0bf31c756b719b4e9f542bc223b_prof);

        
        $__internal_821f1986250ea6576c39f6a372939d020f1364f57b24427ca02b01227a9c8084->leave($__internal_821f1986250ea6576c39f6a372939d020f1364f57b24427ca02b01227a9c8084_prof);

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
