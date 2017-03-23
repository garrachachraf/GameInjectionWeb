<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ce4f7a7f22cbf0c83200ff04c5f5106e96782bf8a45b556866e04b41c3470bd9 extends Twig_Template
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
        $__internal_e6e95b45c42f9fa0dc55cc80013be1d0a6647827356af0977639b9085d80cc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e95b45c42f9fa0dc55cc80013be1d0a6647827356af0977639b9085d80cc53->enter($__internal_e6e95b45c42f9fa0dc55cc80013be1d0a6647827356af0977639b9085d80cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4ebc61f9990651f9bc3d1011d8180e8f2f841b41d10d82148fcb74c887b67941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebc61f9990651f9bc3d1011d8180e8f2f841b41d10d82148fcb74c887b67941->enter($__internal_4ebc61f9990651f9bc3d1011d8180e8f2f841b41d10d82148fcb74c887b67941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e6e95b45c42f9fa0dc55cc80013be1d0a6647827356af0977639b9085d80cc53->leave($__internal_e6e95b45c42f9fa0dc55cc80013be1d0a6647827356af0977639b9085d80cc53_prof);

        
        $__internal_4ebc61f9990651f9bc3d1011d8180e8f2f841b41d10d82148fcb74c887b67941->leave($__internal_4ebc61f9990651f9bc3d1011d8180e8f2f841b41d10d82148fcb74c887b67941_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
