<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_bfa1bebffc680f836d984ddd6e9922620367ddd5d98d4878e7307d18df8af2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa1bebffc680f836d984ddd6e9922620367ddd5d98d4878e7307d18df8af2f0->enter($__internal_bfa1bebffc680f836d984ddd6e9922620367ddd5d98d4878e7307d18df8af2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_33aadc0f98617e3852e8c111e02d7c735d4d2d5138ae7ebb1bb2efa813e2f5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aadc0f98617e3852e8c111e02d7c735d4d2d5138ae7ebb1bb2efa813e2f5b9->enter($__internal_33aadc0f98617e3852e8c111e02d7c735d4d2d5138ae7ebb1bb2efa813e2f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bfa1bebffc680f836d984ddd6e9922620367ddd5d98d4878e7307d18df8af2f0->leave($__internal_bfa1bebffc680f836d984ddd6e9922620367ddd5d98d4878e7307d18df8af2f0_prof);

        
        $__internal_33aadc0f98617e3852e8c111e02d7c735d4d2d5138ae7ebb1bb2efa813e2f5b9->leave($__internal_33aadc0f98617e3852e8c111e02d7c735d4d2d5138ae7ebb1bb2efa813e2f5b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
