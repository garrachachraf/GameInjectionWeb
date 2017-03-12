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
        $__internal_b0446ea9973382325cbbc3b870d23b259f4b618a7631531b9eee89ece868d80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0446ea9973382325cbbc3b870d23b259f4b618a7631531b9eee89ece868d80a->enter($__internal_b0446ea9973382325cbbc3b870d23b259f4b618a7631531b9eee89ece868d80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3eb93781938aa5628f9fc57528f59136fa0ebd8760281d6485b12d8ed0f5eddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb93781938aa5628f9fc57528f59136fa0ebd8760281d6485b12d8ed0f5eddd->enter($__internal_3eb93781938aa5628f9fc57528f59136fa0ebd8760281d6485b12d8ed0f5eddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b0446ea9973382325cbbc3b870d23b259f4b618a7631531b9eee89ece868d80a->leave($__internal_b0446ea9973382325cbbc3b870d23b259f4b618a7631531b9eee89ece868d80a_prof);

        
        $__internal_3eb93781938aa5628f9fc57528f59136fa0ebd8760281d6485b12d8ed0f5eddd->leave($__internal_3eb93781938aa5628f9fc57528f59136fa0ebd8760281d6485b12d8ed0f5eddd_prof);

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
", "@Framework/Form/choice_options.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
