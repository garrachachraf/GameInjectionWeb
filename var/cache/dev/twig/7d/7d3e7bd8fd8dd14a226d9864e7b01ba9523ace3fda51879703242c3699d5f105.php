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
        $__internal_000e26fd5c952ed7e1125dc80ede83c2966bafb13d43aa2e1170540f899ec0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000e26fd5c952ed7e1125dc80ede83c2966bafb13d43aa2e1170540f899ec0e2->enter($__internal_000e26fd5c952ed7e1125dc80ede83c2966bafb13d43aa2e1170540f899ec0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0974182daa99391a3755744b976b5eff38536badc0e5dee9c47c4c30a9577246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0974182daa99391a3755744b976b5eff38536badc0e5dee9c47c4c30a9577246->enter($__internal_0974182daa99391a3755744b976b5eff38536badc0e5dee9c47c4c30a9577246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_000e26fd5c952ed7e1125dc80ede83c2966bafb13d43aa2e1170540f899ec0e2->leave($__internal_000e26fd5c952ed7e1125dc80ede83c2966bafb13d43aa2e1170540f899ec0e2_prof);

        
        $__internal_0974182daa99391a3755744b976b5eff38536badc0e5dee9c47c4c30a9577246->leave($__internal_0974182daa99391a3755744b976b5eff38536badc0e5dee9c47c4c30a9577246_prof);

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
