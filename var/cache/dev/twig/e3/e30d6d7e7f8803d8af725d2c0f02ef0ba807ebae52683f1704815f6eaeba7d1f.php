<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_46fd535418ddacb123ec6dd925651bc1ea09c60ceed58ae5593857610523c25c extends Twig_Template
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
        $__internal_dea880c76ac43a19f387405e04d6da4715eafa72e62ba0ad10c9bcacc3b3b980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea880c76ac43a19f387405e04d6da4715eafa72e62ba0ad10c9bcacc3b3b980->enter($__internal_dea880c76ac43a19f387405e04d6da4715eafa72e62ba0ad10c9bcacc3b3b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_58dbb25941907c3a9014513de93e6a7d518effdba5bdf7be82d269cd45f8ca2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dbb25941907c3a9014513de93e6a7d518effdba5bdf7be82d269cd45f8ca2e->enter($__internal_58dbb25941907c3a9014513de93e6a7d518effdba5bdf7be82d269cd45f8ca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dea880c76ac43a19f387405e04d6da4715eafa72e62ba0ad10c9bcacc3b3b980->leave($__internal_dea880c76ac43a19f387405e04d6da4715eafa72e62ba0ad10c9bcacc3b3b980_prof);

        
        $__internal_58dbb25941907c3a9014513de93e6a7d518effdba5bdf7be82d269cd45f8ca2e->leave($__internal_58dbb25941907c3a9014513de93e6a7d518effdba5bdf7be82d269cd45f8ca2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
