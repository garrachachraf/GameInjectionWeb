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
        $__internal_ae252d420ee30734e166e772a58d641ff9013941c82ac635deb7cc417caac548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae252d420ee30734e166e772a58d641ff9013941c82ac635deb7cc417caac548->enter($__internal_ae252d420ee30734e166e772a58d641ff9013941c82ac635deb7cc417caac548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1d49554e65e63cc32bb9816d27373f3327d8a26f72fe93ea513045f58b8e11a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d49554e65e63cc32bb9816d27373f3327d8a26f72fe93ea513045f58b8e11a3->enter($__internal_1d49554e65e63cc32bb9816d27373f3327d8a26f72fe93ea513045f58b8e11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ae252d420ee30734e166e772a58d641ff9013941c82ac635deb7cc417caac548->leave($__internal_ae252d420ee30734e166e772a58d641ff9013941c82ac635deb7cc417caac548_prof);

        
        $__internal_1d49554e65e63cc32bb9816d27373f3327d8a26f72fe93ea513045f58b8e11a3->leave($__internal_1d49554e65e63cc32bb9816d27373f3327d8a26f72fe93ea513045f58b8e11a3_prof);

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
