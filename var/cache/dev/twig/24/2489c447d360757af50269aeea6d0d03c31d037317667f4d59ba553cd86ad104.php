<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_7521b36985e3800f56b064b74d954b6cb37c102078e0c3e061e1f3f993bb15dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7521b36985e3800f56b064b74d954b6cb37c102078e0c3e061e1f3f993bb15dc->enter($__internal_7521b36985e3800f56b064b74d954b6cb37c102078e0c3e061e1f3f993bb15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_be93347d650a0f9041fc83b168b36a5a1e990bd3573cc5e9226954e95ae64027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be93347d650a0f9041fc83b168b36a5a1e990bd3573cc5e9226954e95ae64027->enter($__internal_be93347d650a0f9041fc83b168b36a5a1e990bd3573cc5e9226954e95ae64027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7521b36985e3800f56b064b74d954b6cb37c102078e0c3e061e1f3f993bb15dc->leave($__internal_7521b36985e3800f56b064b74d954b6cb37c102078e0c3e061e1f3f993bb15dc_prof);

        
        $__internal_be93347d650a0f9041fc83b168b36a5a1e990bd3573cc5e9226954e95ae64027->leave($__internal_be93347d650a0f9041fc83b168b36a5a1e990bd3573cc5e9226954e95ae64027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
