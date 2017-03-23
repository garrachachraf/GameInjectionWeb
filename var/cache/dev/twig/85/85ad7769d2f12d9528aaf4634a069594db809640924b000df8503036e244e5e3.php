<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_40a4e68458302436370acd4ce0be2ff1e79e71aea4d6d59f9f6737030b4ec1f7 extends Twig_Template
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
        $__internal_49335a5feecd00bce7ff7cdaa75a9951dc6e55308ecfe1d845ea18fde0c4e580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49335a5feecd00bce7ff7cdaa75a9951dc6e55308ecfe1d845ea18fde0c4e580->enter($__internal_49335a5feecd00bce7ff7cdaa75a9951dc6e55308ecfe1d845ea18fde0c4e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ea453615befa22ef0b1064bfe80845b53ae9fc8524d32189731b5d555a7d74df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea453615befa22ef0b1064bfe80845b53ae9fc8524d32189731b5d555a7d74df->enter($__internal_ea453615befa22ef0b1064bfe80845b53ae9fc8524d32189731b5d555a7d74df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_49335a5feecd00bce7ff7cdaa75a9951dc6e55308ecfe1d845ea18fde0c4e580->leave($__internal_49335a5feecd00bce7ff7cdaa75a9951dc6e55308ecfe1d845ea18fde0c4e580_prof);

        
        $__internal_ea453615befa22ef0b1064bfe80845b53ae9fc8524d32189731b5d555a7d74df->leave($__internal_ea453615befa22ef0b1064bfe80845b53ae9fc8524d32189731b5d555a7d74df_prof);

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
