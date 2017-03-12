<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c784234235a7ff887bc50d174fd272f250a41d940cce5594db2bbeb23d36505b extends Twig_Template
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
        $__internal_03be5754f08757e04a8c1b8a5749094c5d1f42f56cbcaef798fc39fa5d614c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03be5754f08757e04a8c1b8a5749094c5d1f42f56cbcaef798fc39fa5d614c0a->enter($__internal_03be5754f08757e04a8c1b8a5749094c5d1f42f56cbcaef798fc39fa5d614c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_81eafe65147d15fc0e66cac311d8395419872a49f783042f443a62adb244a096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81eafe65147d15fc0e66cac311d8395419872a49f783042f443a62adb244a096->enter($__internal_81eafe65147d15fc0e66cac311d8395419872a49f783042f443a62adb244a096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_03be5754f08757e04a8c1b8a5749094c5d1f42f56cbcaef798fc39fa5d614c0a->leave($__internal_03be5754f08757e04a8c1b8a5749094c5d1f42f56cbcaef798fc39fa5d614c0a_prof);

        
        $__internal_81eafe65147d15fc0e66cac311d8395419872a49f783042f443a62adb244a096->leave($__internal_81eafe65147d15fc0e66cac311d8395419872a49f783042f443a62adb244a096_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
