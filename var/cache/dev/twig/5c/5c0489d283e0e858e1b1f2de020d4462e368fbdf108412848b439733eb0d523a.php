<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bbcd5aead12958ac8601a959a995da9e80d4371ce54699c48ac8cb1436fafadb extends Twig_Template
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
        $__internal_0755a6a72d9c18118e9431deff35b05253f008fe19dc38f810a0c6e8f3c48da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0755a6a72d9c18118e9431deff35b05253f008fe19dc38f810a0c6e8f3c48da9->enter($__internal_0755a6a72d9c18118e9431deff35b05253f008fe19dc38f810a0c6e8f3c48da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d3bf1a123aac36292684740640867f0ba11c1715863d0ce247a3437442d1560a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bf1a123aac36292684740640867f0ba11c1715863d0ce247a3437442d1560a->enter($__internal_d3bf1a123aac36292684740640867f0ba11c1715863d0ce247a3437442d1560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0755a6a72d9c18118e9431deff35b05253f008fe19dc38f810a0c6e8f3c48da9->leave($__internal_0755a6a72d9c18118e9431deff35b05253f008fe19dc38f810a0c6e8f3c48da9_prof);

        
        $__internal_d3bf1a123aac36292684740640867f0ba11c1715863d0ce247a3437442d1560a->leave($__internal_d3bf1a123aac36292684740640867f0ba11c1715863d0ce247a3437442d1560a_prof);

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
