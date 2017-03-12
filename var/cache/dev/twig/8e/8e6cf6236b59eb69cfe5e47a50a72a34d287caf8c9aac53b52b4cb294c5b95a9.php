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
        $__internal_c75dea36356a6cede020d34e2e98beef587ddc76bfa1b2c051c36286909cb20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75dea36356a6cede020d34e2e98beef587ddc76bfa1b2c051c36286909cb20b->enter($__internal_c75dea36356a6cede020d34e2e98beef587ddc76bfa1b2c051c36286909cb20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_767700c5e73fced909c54cd89d33fb56bb63c5e210df48fb6056a817e0d68534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767700c5e73fced909c54cd89d33fb56bb63c5e210df48fb6056a817e0d68534->enter($__internal_767700c5e73fced909c54cd89d33fb56bb63c5e210df48fb6056a817e0d68534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c75dea36356a6cede020d34e2e98beef587ddc76bfa1b2c051c36286909cb20b->leave($__internal_c75dea36356a6cede020d34e2e98beef587ddc76bfa1b2c051c36286909cb20b_prof);

        
        $__internal_767700c5e73fced909c54cd89d33fb56bb63c5e210df48fb6056a817e0d68534->leave($__internal_767700c5e73fced909c54cd89d33fb56bb63c5e210df48fb6056a817e0d68534_prof);

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
