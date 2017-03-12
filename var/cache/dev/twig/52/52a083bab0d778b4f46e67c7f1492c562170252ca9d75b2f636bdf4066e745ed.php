<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8dc9e6c82196d273eff516f503cb02cd1de7ad444fd39dc242077a723ca70405 extends Twig_Template
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
        $__internal_d78544476678adfc5b0c71d23603d4c62fabc3e96022f09465fa35c577776c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78544476678adfc5b0c71d23603d4c62fabc3e96022f09465fa35c577776c51->enter($__internal_d78544476678adfc5b0c71d23603d4c62fabc3e96022f09465fa35c577776c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_531b199a65dba5057a884baafc84f16f40ce12133cc87f0629375db0f8de3651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531b199a65dba5057a884baafc84f16f40ce12133cc87f0629375db0f8de3651->enter($__internal_531b199a65dba5057a884baafc84f16f40ce12133cc87f0629375db0f8de3651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d78544476678adfc5b0c71d23603d4c62fabc3e96022f09465fa35c577776c51->leave($__internal_d78544476678adfc5b0c71d23603d4c62fabc3e96022f09465fa35c577776c51_prof);

        
        $__internal_531b199a65dba5057a884baafc84f16f40ce12133cc87f0629375db0f8de3651->leave($__internal_531b199a65dba5057a884baafc84f16f40ce12133cc87f0629375db0f8de3651_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
