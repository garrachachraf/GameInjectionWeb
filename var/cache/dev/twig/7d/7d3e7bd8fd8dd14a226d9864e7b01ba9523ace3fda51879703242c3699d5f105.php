<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_50b5965d49b88a2fd435b44714a9eb5ed414e248c113bac2bdc80a441ba1e642 extends Twig_Template
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
        $__internal_6cc2c246c95bfc1d77507408605509c384a1c3511ed6d028868c42522b72b1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc2c246c95bfc1d77507408605509c384a1c3511ed6d028868c42522b72b1f2->enter($__internal_6cc2c246c95bfc1d77507408605509c384a1c3511ed6d028868c42522b72b1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4eb061a7ab27fa3129e2632bb24781fb822bfcb6732d76135e4c4b29747e3a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb061a7ab27fa3129e2632bb24781fb822bfcb6732d76135e4c4b29747e3a0f->enter($__internal_4eb061a7ab27fa3129e2632bb24781fb822bfcb6732d76135e4c4b29747e3a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6cc2c246c95bfc1d77507408605509c384a1c3511ed6d028868c42522b72b1f2->leave($__internal_6cc2c246c95bfc1d77507408605509c384a1c3511ed6d028868c42522b72b1f2_prof);

        
        $__internal_4eb061a7ab27fa3129e2632bb24781fb822bfcb6732d76135e4c4b29747e3a0f->leave($__internal_4eb061a7ab27fa3129e2632bb24781fb822bfcb6732d76135e4c4b29747e3a0f_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
