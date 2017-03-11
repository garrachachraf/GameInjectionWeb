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
        $__internal_97b825151cf19f875cc22694fce39a4deecf9ada0cfd962bf08e231f6c129782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b825151cf19f875cc22694fce39a4deecf9ada0cfd962bf08e231f6c129782->enter($__internal_97b825151cf19f875cc22694fce39a4deecf9ada0cfd962bf08e231f6c129782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_afec4c6fd4bc5897d73bf1dc0ec5a8f2431db0d9bbb10bbe40425b38de6f3f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afec4c6fd4bc5897d73bf1dc0ec5a8f2431db0d9bbb10bbe40425b38de6f3f87->enter($__internal_afec4c6fd4bc5897d73bf1dc0ec5a8f2431db0d9bbb10bbe40425b38de6f3f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97b825151cf19f875cc22694fce39a4deecf9ada0cfd962bf08e231f6c129782->leave($__internal_97b825151cf19f875cc22694fce39a4deecf9ada0cfd962bf08e231f6c129782_prof);

        
        $__internal_afec4c6fd4bc5897d73bf1dc0ec5a8f2431db0d9bbb10bbe40425b38de6f3f87->leave($__internal_afec4c6fd4bc5897d73bf1dc0ec5a8f2431db0d9bbb10bbe40425b38de6f3f87_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
