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
        $__internal_dd8319f635848baaaf82634bca98b89b50d61b6b707ccaf5cc37fa4fa8d7863a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8319f635848baaaf82634bca98b89b50d61b6b707ccaf5cc37fa4fa8d7863a->enter($__internal_dd8319f635848baaaf82634bca98b89b50d61b6b707ccaf5cc37fa4fa8d7863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8032ef73a2f52faa71129efa84e1a15563b27798a5911299b9d9a6f3d17ff060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8032ef73a2f52faa71129efa84e1a15563b27798a5911299b9d9a6f3d17ff060->enter($__internal_8032ef73a2f52faa71129efa84e1a15563b27798a5911299b9d9a6f3d17ff060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_dd8319f635848baaaf82634bca98b89b50d61b6b707ccaf5cc37fa4fa8d7863a->leave($__internal_dd8319f635848baaaf82634bca98b89b50d61b6b707ccaf5cc37fa4fa8d7863a_prof);

        
        $__internal_8032ef73a2f52faa71129efa84e1a15563b27798a5911299b9d9a6f3d17ff060->leave($__internal_8032ef73a2f52faa71129efa84e1a15563b27798a5911299b9d9a6f3d17ff060_prof);

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
