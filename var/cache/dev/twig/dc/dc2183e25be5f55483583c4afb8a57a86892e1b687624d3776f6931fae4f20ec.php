<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42a6b5cb5e360e2218254bff905a18ee14aecc85ed9850d319cb54457d6beeec extends Twig_Template
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
        $__internal_f80c43ea8319f2f598dbaea0194f66bb5942f2a0196f66181c8fe8949930b0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c43ea8319f2f598dbaea0194f66bb5942f2a0196f66181c8fe8949930b0f2->enter($__internal_f80c43ea8319f2f598dbaea0194f66bb5942f2a0196f66181c8fe8949930b0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_db1be2d32f7c253417eec88e7581b8959fd3901484a00958616b33ab5d3fc117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1be2d32f7c253417eec88e7581b8959fd3901484a00958616b33ab5d3fc117->enter($__internal_db1be2d32f7c253417eec88e7581b8959fd3901484a00958616b33ab5d3fc117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f80c43ea8319f2f598dbaea0194f66bb5942f2a0196f66181c8fe8949930b0f2->leave($__internal_f80c43ea8319f2f598dbaea0194f66bb5942f2a0196f66181c8fe8949930b0f2_prof);

        
        $__internal_db1be2d32f7c253417eec88e7581b8959fd3901484a00958616b33ab5d3fc117->leave($__internal_db1be2d32f7c253417eec88e7581b8959fd3901484a00958616b33ab5d3fc117_prof);

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
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
