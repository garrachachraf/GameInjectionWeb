<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a0377ad03aeca1dad0c642dc6eeca3145905994c4aae10e464d5c8eb37d0e182 extends Twig_Template
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
        $__internal_e26076d67a980378b6d0fad0fe0864c798fbec8710554caf68eaa973a028c3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26076d67a980378b6d0fad0fe0864c798fbec8710554caf68eaa973a028c3fb->enter($__internal_e26076d67a980378b6d0fad0fe0864c798fbec8710554caf68eaa973a028c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c91eaddc4d6c0a256afc17670be8596a1f04cbc993df189baddc890ca309ca93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91eaddc4d6c0a256afc17670be8596a1f04cbc993df189baddc890ca309ca93->enter($__internal_c91eaddc4d6c0a256afc17670be8596a1f04cbc993df189baddc890ca309ca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e26076d67a980378b6d0fad0fe0864c798fbec8710554caf68eaa973a028c3fb->leave($__internal_e26076d67a980378b6d0fad0fe0864c798fbec8710554caf68eaa973a028c3fb_prof);

        
        $__internal_c91eaddc4d6c0a256afc17670be8596a1f04cbc993df189baddc890ca309ca93->leave($__internal_c91eaddc4d6c0a256afc17670be8596a1f04cbc993df189baddc890ca309ca93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}