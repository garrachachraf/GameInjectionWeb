<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_65954491d069c9aab018c727b22314ebeaddeddd111c072766e8287b9876e7a0 extends Twig_Template
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
        $__internal_b7846c9803fee0a1531b116d3bb290546de132929bdc663d53613176453e33b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7846c9803fee0a1531b116d3bb290546de132929bdc663d53613176453e33b0->enter($__internal_b7846c9803fee0a1531b116d3bb290546de132929bdc663d53613176453e33b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f5d2842285be9458804a5fbe9682a88915cfd47c74259be5006faf6ed4e239dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d2842285be9458804a5fbe9682a88915cfd47c74259be5006faf6ed4e239dc->enter($__internal_f5d2842285be9458804a5fbe9682a88915cfd47c74259be5006faf6ed4e239dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b7846c9803fee0a1531b116d3bb290546de132929bdc663d53613176453e33b0->leave($__internal_b7846c9803fee0a1531b116d3bb290546de132929bdc663d53613176453e33b0_prof);

        
        $__internal_f5d2842285be9458804a5fbe9682a88915cfd47c74259be5006faf6ed4e239dc->leave($__internal_f5d2842285be9458804a5fbe9682a88915cfd47c74259be5006faf6ed4e239dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
