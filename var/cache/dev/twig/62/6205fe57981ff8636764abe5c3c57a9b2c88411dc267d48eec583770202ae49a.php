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
        $__internal_852035f01a8040cc7b964e8bc2b687fd1f84286ba95762f528a3dba652698d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852035f01a8040cc7b964e8bc2b687fd1f84286ba95762f528a3dba652698d38->enter($__internal_852035f01a8040cc7b964e8bc2b687fd1f84286ba95762f528a3dba652698d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3b894c4284933ed61f5f4d428d58642ab52f64b640d5091d7420fe30fceca559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b894c4284933ed61f5f4d428d58642ab52f64b640d5091d7420fe30fceca559->enter($__internal_3b894c4284933ed61f5f4d428d58642ab52f64b640d5091d7420fe30fceca559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_852035f01a8040cc7b964e8bc2b687fd1f84286ba95762f528a3dba652698d38->leave($__internal_852035f01a8040cc7b964e8bc2b687fd1f84286ba95762f528a3dba652698d38_prof);

        
        $__internal_3b894c4284933ed61f5f4d428d58642ab52f64b640d5091d7420fe30fceca559->leave($__internal_3b894c4284933ed61f5f4d428d58642ab52f64b640d5091d7420fe30fceca559_prof);

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
