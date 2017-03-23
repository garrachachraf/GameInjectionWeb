<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66f3a924bbe284e5e3802d8430a9147867f45d1d1b278a12314c47f973608779 extends Twig_Template
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
        $__internal_d37bc627b3801ebc99c7c75b2011d60095abbcb40d81e300a0cd595042a96547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37bc627b3801ebc99c7c75b2011d60095abbcb40d81e300a0cd595042a96547->enter($__internal_d37bc627b3801ebc99c7c75b2011d60095abbcb40d81e300a0cd595042a96547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bd394ff298fdf91b067f6ce81551ddd430d59486aca1dd21c15ab25da1824386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd394ff298fdf91b067f6ce81551ddd430d59486aca1dd21c15ab25da1824386->enter($__internal_bd394ff298fdf91b067f6ce81551ddd430d59486aca1dd21c15ab25da1824386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d37bc627b3801ebc99c7c75b2011d60095abbcb40d81e300a0cd595042a96547->leave($__internal_d37bc627b3801ebc99c7c75b2011d60095abbcb40d81e300a0cd595042a96547_prof);

        
        $__internal_bd394ff298fdf91b067f6ce81551ddd430d59486aca1dd21c15ab25da1824386->leave($__internal_bd394ff298fdf91b067f6ce81551ddd430d59486aca1dd21c15ab25da1824386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
