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
        $__internal_1608492c1354383e7526aacf43aeab17bcfc27df549eac92ec38da6c280b3d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1608492c1354383e7526aacf43aeab17bcfc27df549eac92ec38da6c280b3d08->enter($__internal_1608492c1354383e7526aacf43aeab17bcfc27df549eac92ec38da6c280b3d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a240eb38ef0ec905b4fe348d8ff14e7847199c96302aa2cf3c8a2ebe7990097b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a240eb38ef0ec905b4fe348d8ff14e7847199c96302aa2cf3c8a2ebe7990097b->enter($__internal_a240eb38ef0ec905b4fe348d8ff14e7847199c96302aa2cf3c8a2ebe7990097b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1608492c1354383e7526aacf43aeab17bcfc27df549eac92ec38da6c280b3d08->leave($__internal_1608492c1354383e7526aacf43aeab17bcfc27df549eac92ec38da6c280b3d08_prof);

        
        $__internal_a240eb38ef0ec905b4fe348d8ff14e7847199c96302aa2cf3c8a2ebe7990097b->leave($__internal_a240eb38ef0ec905b4fe348d8ff14e7847199c96302aa2cf3c8a2ebe7990097b_prof);

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
