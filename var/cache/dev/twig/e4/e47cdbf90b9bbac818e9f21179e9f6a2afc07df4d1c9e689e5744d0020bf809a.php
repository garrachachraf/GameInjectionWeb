<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_365a5c85e7c9b80363327913d00cd96608deab5790ed8b4aa1e2615efb0bf290 extends Twig_Template
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
        $__internal_9b6cc1a709d30f86f47a7b28c1199bb106e89fe9cbbd7939c9a0e4aa71cfcdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6cc1a709d30f86f47a7b28c1199bb106e89fe9cbbd7939c9a0e4aa71cfcdde->enter($__internal_9b6cc1a709d30f86f47a7b28c1199bb106e89fe9cbbd7939c9a0e4aa71cfcdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c2ff09b4292ddce586dfa2298cb6555f3323bac525abee4bab92e08f13cc224d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ff09b4292ddce586dfa2298cb6555f3323bac525abee4bab92e08f13cc224d->enter($__internal_c2ff09b4292ddce586dfa2298cb6555f3323bac525abee4bab92e08f13cc224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b6cc1a709d30f86f47a7b28c1199bb106e89fe9cbbd7939c9a0e4aa71cfcdde->leave($__internal_9b6cc1a709d30f86f47a7b28c1199bb106e89fe9cbbd7939c9a0e4aa71cfcdde_prof);

        
        $__internal_c2ff09b4292ddce586dfa2298cb6555f3323bac525abee4bab92e08f13cc224d->leave($__internal_c2ff09b4292ddce586dfa2298cb6555f3323bac525abee4bab92e08f13cc224d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
