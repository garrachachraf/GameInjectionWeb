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
        $__internal_ac97919d25667bb371fdcb9e3d481ee1936560fbc47f23590dcee514d9b3dd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac97919d25667bb371fdcb9e3d481ee1936560fbc47f23590dcee514d9b3dd93->enter($__internal_ac97919d25667bb371fdcb9e3d481ee1936560fbc47f23590dcee514d9b3dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_938fdc4d01bf1ce4f3fe605067b7f3509f4b2b4517c5ed230eab4ce28fa0e644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938fdc4d01bf1ce4f3fe605067b7f3509f4b2b4517c5ed230eab4ce28fa0e644->enter($__internal_938fdc4d01bf1ce4f3fe605067b7f3509f4b2b4517c5ed230eab4ce28fa0e644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ac97919d25667bb371fdcb9e3d481ee1936560fbc47f23590dcee514d9b3dd93->leave($__internal_ac97919d25667bb371fdcb9e3d481ee1936560fbc47f23590dcee514d9b3dd93_prof);

        
        $__internal_938fdc4d01bf1ce4f3fe605067b7f3509f4b2b4517c5ed230eab4ce28fa0e644->leave($__internal_938fdc4d01bf1ce4f3fe605067b7f3509f4b2b4517c5ed230eab4ce28fa0e644_prof);

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
