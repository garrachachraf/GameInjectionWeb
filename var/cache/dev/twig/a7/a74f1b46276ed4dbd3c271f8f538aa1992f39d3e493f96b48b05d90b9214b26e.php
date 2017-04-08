<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_19158c101fd1c47bff79a33bddddba9c8ebcdbbbfc0071d8ce31e73e5863b5a2 extends Twig_Template
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
        $__internal_c04b44850058a4c106e9b23ce2787bb8cef95851e0ddacd11deafba013136bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04b44850058a4c106e9b23ce2787bb8cef95851e0ddacd11deafba013136bba->enter($__internal_c04b44850058a4c106e9b23ce2787bb8cef95851e0ddacd11deafba013136bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_eadd7edb1aaf881b863c44eda66d69cbb4ab76dc4015840a81a0600228bdd031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadd7edb1aaf881b863c44eda66d69cbb4ab76dc4015840a81a0600228bdd031->enter($__internal_eadd7edb1aaf881b863c44eda66d69cbb4ab76dc4015840a81a0600228bdd031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c04b44850058a4c106e9b23ce2787bb8cef95851e0ddacd11deafba013136bba->leave($__internal_c04b44850058a4c106e9b23ce2787bb8cef95851e0ddacd11deafba013136bba_prof);

        
        $__internal_eadd7edb1aaf881b863c44eda66d69cbb4ab76dc4015840a81a0600228bdd031->leave($__internal_eadd7edb1aaf881b863c44eda66d69cbb4ab76dc4015840a81a0600228bdd031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
