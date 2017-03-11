<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6beb572cc3349330119da77b7d8d71fae0f27a564e0daff9d84425bdee21270f extends Twig_Template
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
        $__internal_ff362149f5accbb1b3673bfb21beca83ca22360adc651e3ab78ee33025bacb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff362149f5accbb1b3673bfb21beca83ca22360adc651e3ab78ee33025bacb1d->enter($__internal_ff362149f5accbb1b3673bfb21beca83ca22360adc651e3ab78ee33025bacb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_93857cd293e76ff41232fe220efbad880feada9fe59ae04980dc2fc7ae8b8c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93857cd293e76ff41232fe220efbad880feada9fe59ae04980dc2fc7ae8b8c9b->enter($__internal_93857cd293e76ff41232fe220efbad880feada9fe59ae04980dc2fc7ae8b8c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ff362149f5accbb1b3673bfb21beca83ca22360adc651e3ab78ee33025bacb1d->leave($__internal_ff362149f5accbb1b3673bfb21beca83ca22360adc651e3ab78ee33025bacb1d_prof);

        
        $__internal_93857cd293e76ff41232fe220efbad880feada9fe59ae04980dc2fc7ae8b8c9b->leave($__internal_93857cd293e76ff41232fe220efbad880feada9fe59ae04980dc2fc7ae8b8c9b_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
