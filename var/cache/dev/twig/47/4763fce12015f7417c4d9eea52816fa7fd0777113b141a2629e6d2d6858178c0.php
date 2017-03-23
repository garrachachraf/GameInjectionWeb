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
        $__internal_774b078fdeb75e430ba44978e1ca61bcf3c3d1a104e8ed75b062000dab285aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774b078fdeb75e430ba44978e1ca61bcf3c3d1a104e8ed75b062000dab285aaf->enter($__internal_774b078fdeb75e430ba44978e1ca61bcf3c3d1a104e8ed75b062000dab285aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e181eb9dac9dd1fc9ffae68cae790809883c09a6b6dfa49efef6bd9145fda9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e181eb9dac9dd1fc9ffae68cae790809883c09a6b6dfa49efef6bd9145fda9c6->enter($__internal_e181eb9dac9dd1fc9ffae68cae790809883c09a6b6dfa49efef6bd9145fda9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_774b078fdeb75e430ba44978e1ca61bcf3c3d1a104e8ed75b062000dab285aaf->leave($__internal_774b078fdeb75e430ba44978e1ca61bcf3c3d1a104e8ed75b062000dab285aaf_prof);

        
        $__internal_e181eb9dac9dd1fc9ffae68cae790809883c09a6b6dfa49efef6bd9145fda9c6->leave($__internal_e181eb9dac9dd1fc9ffae68cae790809883c09a6b6dfa49efef6bd9145fda9c6_prof);

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
