<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3eb77dd48073a5fd77a63b8c488868f0b0b46dd405154f471a3f27477f476a0c extends Twig_Template
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
        $__internal_9f2e70b570e969992b3fb83f6e4312c4a4390c095767f591260c6d82141e4cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2e70b570e969992b3fb83f6e4312c4a4390c095767f591260c6d82141e4cfc->enter($__internal_9f2e70b570e969992b3fb83f6e4312c4a4390c095767f591260c6d82141e4cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_68dbef0d576766eb285e6f1226663145c590e862b67a398a7d1b807eea75ae9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dbef0d576766eb285e6f1226663145c590e862b67a398a7d1b807eea75ae9d->enter($__internal_68dbef0d576766eb285e6f1226663145c590e862b67a398a7d1b807eea75ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9f2e70b570e969992b3fb83f6e4312c4a4390c095767f591260c6d82141e4cfc->leave($__internal_9f2e70b570e969992b3fb83f6e4312c4a4390c095767f591260c6d82141e4cfc_prof);

        
        $__internal_68dbef0d576766eb285e6f1226663145c590e862b67a398a7d1b807eea75ae9d->leave($__internal_68dbef0d576766eb285e6f1226663145c590e862b67a398a7d1b807eea75ae9d_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
