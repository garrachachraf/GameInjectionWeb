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
        $__internal_916189ca0548626dd3614aa4bf7fdeeeee6ac9939b759bcfbbed881a6505f71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916189ca0548626dd3614aa4bf7fdeeeee6ac9939b759bcfbbed881a6505f71e->enter($__internal_916189ca0548626dd3614aa4bf7fdeeeee6ac9939b759bcfbbed881a6505f71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ca33599022a815e207cc16bf7f29e70667a5e039390b7cf6d4dda1e077314ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca33599022a815e207cc16bf7f29e70667a5e039390b7cf6d4dda1e077314ce9->enter($__internal_ca33599022a815e207cc16bf7f29e70667a5e039390b7cf6d4dda1e077314ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_916189ca0548626dd3614aa4bf7fdeeeee6ac9939b759bcfbbed881a6505f71e->leave($__internal_916189ca0548626dd3614aa4bf7fdeeeee6ac9939b759bcfbbed881a6505f71e_prof);

        
        $__internal_ca33599022a815e207cc16bf7f29e70667a5e039390b7cf6d4dda1e077314ce9->leave($__internal_ca33599022a815e207cc16bf7f29e70667a5e039390b7cf6d4dda1e077314ce9_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
