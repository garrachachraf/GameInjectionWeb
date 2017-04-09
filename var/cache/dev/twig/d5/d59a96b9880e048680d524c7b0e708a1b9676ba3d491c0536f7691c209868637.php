<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1b1c0c6c647c10d49e95fcef4ddab8b464472774f5af8e301cb2b1361363448d extends Twig_Template
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
        $__internal_83e18fa80caa33744b27ded60d8c95c402c5c4251814c34beaaf46606fb286fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e18fa80caa33744b27ded60d8c95c402c5c4251814c34beaaf46606fb286fe->enter($__internal_83e18fa80caa33744b27ded60d8c95c402c5c4251814c34beaaf46606fb286fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_99203717c7392a96af38def1114d0bc3ed7e2b3773b198e4cc9d245997f1dda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99203717c7392a96af38def1114d0bc3ed7e2b3773b198e4cc9d245997f1dda2->enter($__internal_99203717c7392a96af38def1114d0bc3ed7e2b3773b198e4cc9d245997f1dda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_83e18fa80caa33744b27ded60d8c95c402c5c4251814c34beaaf46606fb286fe->leave($__internal_83e18fa80caa33744b27ded60d8c95c402c5c4251814c34beaaf46606fb286fe_prof);

        
        $__internal_99203717c7392a96af38def1114d0bc3ed7e2b3773b198e4cc9d245997f1dda2->leave($__internal_99203717c7392a96af38def1114d0bc3ed7e2b3773b198e4cc9d245997f1dda2_prof);

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
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
