<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_faabd321cb93de050d50bb788ebdcb7ba2e7543369f9ea50cdf52d262df8c725 extends Twig_Template
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
        $__internal_047acaed9f94fdc2a30685150977f9a50aa467939ed5d201aef68c0dd9e66b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047acaed9f94fdc2a30685150977f9a50aa467939ed5d201aef68c0dd9e66b7d->enter($__internal_047acaed9f94fdc2a30685150977f9a50aa467939ed5d201aef68c0dd9e66b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1d87c67a8fad3eb627587a9afd7e92f1fef8d27754ccf1b25eb07b8555ccdbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d87c67a8fad3eb627587a9afd7e92f1fef8d27754ccf1b25eb07b8555ccdbb5->enter($__internal_1d87c67a8fad3eb627587a9afd7e92f1fef8d27754ccf1b25eb07b8555ccdbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_047acaed9f94fdc2a30685150977f9a50aa467939ed5d201aef68c0dd9e66b7d->leave($__internal_047acaed9f94fdc2a30685150977f9a50aa467939ed5d201aef68c0dd9e66b7d_prof);

        
        $__internal_1d87c67a8fad3eb627587a9afd7e92f1fef8d27754ccf1b25eb07b8555ccdbb5->leave($__internal_1d87c67a8fad3eb627587a9afd7e92f1fef8d27754ccf1b25eb07b8555ccdbb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
