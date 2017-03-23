<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6b10b417d09dc2345f9a49e008fbeb8fe73d805c380c33f411002fa0eca8b262 extends Twig_Template
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
        $__internal_dca64200c382f0188f609f6849fedcf00f158ef06759276cf97fa3c4f34d51c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca64200c382f0188f609f6849fedcf00f158ef06759276cf97fa3c4f34d51c4->enter($__internal_dca64200c382f0188f609f6849fedcf00f158ef06759276cf97fa3c4f34d51c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_04f28700f08b27a4c0644b0466c2178a26662aae64dd9cc1b426bb5ee2098fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f28700f08b27a4c0644b0466c2178a26662aae64dd9cc1b426bb5ee2098fa4->enter($__internal_04f28700f08b27a4c0644b0466c2178a26662aae64dd9cc1b426bb5ee2098fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dca64200c382f0188f609f6849fedcf00f158ef06759276cf97fa3c4f34d51c4->leave($__internal_dca64200c382f0188f609f6849fedcf00f158ef06759276cf97fa3c4f34d51c4_prof);

        
        $__internal_04f28700f08b27a4c0644b0466c2178a26662aae64dd9cc1b426bb5ee2098fa4->leave($__internal_04f28700f08b27a4c0644b0466c2178a26662aae64dd9cc1b426bb5ee2098fa4_prof);

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
