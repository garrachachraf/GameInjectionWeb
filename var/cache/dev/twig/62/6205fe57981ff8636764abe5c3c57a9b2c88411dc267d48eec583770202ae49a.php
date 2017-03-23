<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9cca86d4d997ee68fd3af555fd02cc4f6dd33f5722a25d1908ee62eeee1819a9 extends Twig_Template
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
        $__internal_db55be9d05479c4000bd9ae1dd75c8933451c66c1758bbb488692ad49003921d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db55be9d05479c4000bd9ae1dd75c8933451c66c1758bbb488692ad49003921d->enter($__internal_db55be9d05479c4000bd9ae1dd75c8933451c66c1758bbb488692ad49003921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f5f494908abb5129ac4b1ae7ee71048fa1701e58d6ced7721894156fd7ff7acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f494908abb5129ac4b1ae7ee71048fa1701e58d6ced7721894156fd7ff7acd->enter($__internal_f5f494908abb5129ac4b1ae7ee71048fa1701e58d6ced7721894156fd7ff7acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_db55be9d05479c4000bd9ae1dd75c8933451c66c1758bbb488692ad49003921d->leave($__internal_db55be9d05479c4000bd9ae1dd75c8933451c66c1758bbb488692ad49003921d_prof);

        
        $__internal_f5f494908abb5129ac4b1ae7ee71048fa1701e58d6ced7721894156fd7ff7acd->leave($__internal_f5f494908abb5129ac4b1ae7ee71048fa1701e58d6ced7721894156fd7ff7acd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
