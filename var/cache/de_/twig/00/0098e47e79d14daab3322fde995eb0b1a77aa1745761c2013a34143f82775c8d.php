<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a8f5fd32080338a828ceb5d6ecefb5ac71707d377d368cb0d0eaa0c1672ca12a extends Twig_Template
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
        $__internal_f5e55f6476fceaffaf8bf527b8a7110eecfd27e07bee14487fc047d63f0bb7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e55f6476fceaffaf8bf527b8a7110eecfd27e07bee14487fc047d63f0bb7b0->enter($__internal_f5e55f6476fceaffaf8bf527b8a7110eecfd27e07bee14487fc047d63f0bb7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d3fe1c1d05dbf250d85ef72b328d4ce0bd05062395938e4e0b7210db0d2c9a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fe1c1d05dbf250d85ef72b328d4ce0bd05062395938e4e0b7210db0d2c9a25->enter($__internal_d3fe1c1d05dbf250d85ef72b328d4ce0bd05062395938e4e0b7210db0d2c9a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f5e55f6476fceaffaf8bf527b8a7110eecfd27e07bee14487fc047d63f0bb7b0->leave($__internal_f5e55f6476fceaffaf8bf527b8a7110eecfd27e07bee14487fc047d63f0bb7b0_prof);

        
        $__internal_d3fe1c1d05dbf250d85ef72b328d4ce0bd05062395938e4e0b7210db0d2c9a25->leave($__internal_d3fe1c1d05dbf250d85ef72b328d4ce0bd05062395938e4e0b7210db0d2c9a25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
