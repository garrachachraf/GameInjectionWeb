<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4b6c8f4f93bdf836448b298fa8fb9bd492d749ef2f055cc765c56df6abd38ab0 extends Twig_Template
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
        $__internal_bfd99bc92502b1f16f03dc4bc162c83d4de5aacd6bbf705257ad5ab70ac0f608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd99bc92502b1f16f03dc4bc162c83d4de5aacd6bbf705257ad5ab70ac0f608->enter($__internal_bfd99bc92502b1f16f03dc4bc162c83d4de5aacd6bbf705257ad5ab70ac0f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fd54bc0f87a9c0b21fb1b1fe3fd33c60e156a5dd5326ff06e60d83252fa88df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd54bc0f87a9c0b21fb1b1fe3fd33c60e156a5dd5326ff06e60d83252fa88df9->enter($__internal_fd54bc0f87a9c0b21fb1b1fe3fd33c60e156a5dd5326ff06e60d83252fa88df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bfd99bc92502b1f16f03dc4bc162c83d4de5aacd6bbf705257ad5ab70ac0f608->leave($__internal_bfd99bc92502b1f16f03dc4bc162c83d4de5aacd6bbf705257ad5ab70ac0f608_prof);

        
        $__internal_fd54bc0f87a9c0b21fb1b1fe3fd33c60e156a5dd5326ff06e60d83252fa88df9->leave($__internal_fd54bc0f87a9c0b21fb1b1fe3fd33c60e156a5dd5326ff06e60d83252fa88df9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
