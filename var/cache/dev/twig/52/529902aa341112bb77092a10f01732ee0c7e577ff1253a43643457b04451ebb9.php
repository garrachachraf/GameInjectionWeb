<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a3d668d321c94361a08a6b016b000fbb6cf2fe4320aa72ec89c2b42ce29ba02e extends Twig_Template
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
        $__internal_1b251f2910adce55bd6a41276b981e1a160affea187ec45d963c64d3936aae8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b251f2910adce55bd6a41276b981e1a160affea187ec45d963c64d3936aae8e->enter($__internal_1b251f2910adce55bd6a41276b981e1a160affea187ec45d963c64d3936aae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ff81998a2d5d745fdda62eee5b461058ca0be3b51585064cdf97fe86a79e9bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff81998a2d5d745fdda62eee5b461058ca0be3b51585064cdf97fe86a79e9bb4->enter($__internal_ff81998a2d5d745fdda62eee5b461058ca0be3b51585064cdf97fe86a79e9bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1b251f2910adce55bd6a41276b981e1a160affea187ec45d963c64d3936aae8e->leave($__internal_1b251f2910adce55bd6a41276b981e1a160affea187ec45d963c64d3936aae8e_prof);

        
        $__internal_ff81998a2d5d745fdda62eee5b461058ca0be3b51585064cdf97fe86a79e9bb4->leave($__internal_ff81998a2d5d745fdda62eee5b461058ca0be3b51585064cdf97fe86a79e9bb4_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
