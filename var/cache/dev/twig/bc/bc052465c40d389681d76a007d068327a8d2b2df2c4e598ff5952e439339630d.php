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
        $__internal_acd6d4e0beeb07115de4124d48c23b4da865ef0927a4c398dd4396201d05c2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd6d4e0beeb07115de4124d48c23b4da865ef0927a4c398dd4396201d05c2a4->enter($__internal_acd6d4e0beeb07115de4124d48c23b4da865ef0927a4c398dd4396201d05c2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4a09a8ea34b6fa5fccbd74afcac833e26efad706cc7132d02b9d51e827413324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a09a8ea34b6fa5fccbd74afcac833e26efad706cc7132d02b9d51e827413324->enter($__internal_4a09a8ea34b6fa5fccbd74afcac833e26efad706cc7132d02b9d51e827413324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_acd6d4e0beeb07115de4124d48c23b4da865ef0927a4c398dd4396201d05c2a4->leave($__internal_acd6d4e0beeb07115de4124d48c23b4da865ef0927a4c398dd4396201d05c2a4_prof);

        
        $__internal_4a09a8ea34b6fa5fccbd74afcac833e26efad706cc7132d02b9d51e827413324->leave($__internal_4a09a8ea34b6fa5fccbd74afcac833e26efad706cc7132d02b9d51e827413324_prof);

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
