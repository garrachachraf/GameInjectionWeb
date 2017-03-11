<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_01b6fe68c5b8f1b92361537b8dd1c4e8deb9bc950a068a6afd7797c36e5441f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b6fe68c5b8f1b92361537b8dd1c4e8deb9bc950a068a6afd7797c36e5441f5->enter($__internal_01b6fe68c5b8f1b92361537b8dd1c4e8deb9bc950a068a6afd7797c36e5441f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e82f818dad5d8b0b20f61f2917777269822a4bc61b967f8832423ef213cc2792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82f818dad5d8b0b20f61f2917777269822a4bc61b967f8832423ef213cc2792->enter($__internal_e82f818dad5d8b0b20f61f2917777269822a4bc61b967f8832423ef213cc2792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_01b6fe68c5b8f1b92361537b8dd1c4e8deb9bc950a068a6afd7797c36e5441f5->leave($__internal_01b6fe68c5b8f1b92361537b8dd1c4e8deb9bc950a068a6afd7797c36e5441f5_prof);

        
        $__internal_e82f818dad5d8b0b20f61f2917777269822a4bc61b967f8832423ef213cc2792->leave($__internal_e82f818dad5d8b0b20f61f2917777269822a4bc61b967f8832423ef213cc2792_prof);

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
", "@Framework/Form/choice_options.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
