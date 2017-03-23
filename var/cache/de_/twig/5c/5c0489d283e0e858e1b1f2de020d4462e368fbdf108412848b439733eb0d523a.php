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
        $__internal_a18f7e176bad4c0d3249ba9adb144f5804ee065254f5570b53e0a0ba50f4c57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18f7e176bad4c0d3249ba9adb144f5804ee065254f5570b53e0a0ba50f4c57e->enter($__internal_a18f7e176bad4c0d3249ba9adb144f5804ee065254f5570b53e0a0ba50f4c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_960d4b327dc2ad1515bd3acda3a199ba76cd14e178bd6af9d69d1d0c7846fd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960d4b327dc2ad1515bd3acda3a199ba76cd14e178bd6af9d69d1d0c7846fd7e->enter($__internal_960d4b327dc2ad1515bd3acda3a199ba76cd14e178bd6af9d69d1d0c7846fd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a18f7e176bad4c0d3249ba9adb144f5804ee065254f5570b53e0a0ba50f4c57e->leave($__internal_a18f7e176bad4c0d3249ba9adb144f5804ee065254f5570b53e0a0ba50f4c57e_prof);

        
        $__internal_960d4b327dc2ad1515bd3acda3a199ba76cd14e178bd6af9d69d1d0c7846fd7e->leave($__internal_960d4b327dc2ad1515bd3acda3a199ba76cd14e178bd6af9d69d1d0c7846fd7e_prof);

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
