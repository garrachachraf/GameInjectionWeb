<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_576a8ffdc209e9303ec42611b184ae11a0ea88940d27bef20cac1d1172df20d2 extends Twig_Template
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
        $__internal_e8ab2d2062eb3747c80de18017955559f00dcb88d5e19ca7114ddb5b1d415ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ab2d2062eb3747c80de18017955559f00dcb88d5e19ca7114ddb5b1d415ed7->enter($__internal_e8ab2d2062eb3747c80de18017955559f00dcb88d5e19ca7114ddb5b1d415ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f49b0a139505206577f4b9a958fcca50a05239e14f5700cea53e8489a4f42f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49b0a139505206577f4b9a958fcca50a05239e14f5700cea53e8489a4f42f12->enter($__internal_f49b0a139505206577f4b9a958fcca50a05239e14f5700cea53e8489a4f42f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e8ab2d2062eb3747c80de18017955559f00dcb88d5e19ca7114ddb5b1d415ed7->leave($__internal_e8ab2d2062eb3747c80de18017955559f00dcb88d5e19ca7114ddb5b1d415ed7_prof);

        
        $__internal_f49b0a139505206577f4b9a958fcca50a05239e14f5700cea53e8489a4f42f12->leave($__internal_f49b0a139505206577f4b9a958fcca50a05239e14f5700cea53e8489a4f42f12_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
