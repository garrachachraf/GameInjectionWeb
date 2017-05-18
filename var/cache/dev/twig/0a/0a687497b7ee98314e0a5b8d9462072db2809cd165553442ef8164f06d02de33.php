<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d515a6844f413697da5327cdc95747e8ab5aaea966cad3b78195e14959fbbd8a extends Twig_Template
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
        $__internal_bd7535bcb468e13d685415cb0e8a2dae43d46aa237311cada438d88b06bbce02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7535bcb468e13d685415cb0e8a2dae43d46aa237311cada438d88b06bbce02->enter($__internal_bd7535bcb468e13d685415cb0e8a2dae43d46aa237311cada438d88b06bbce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f819899adbbc8598ac6b1f6bc2e2dd06173a28791e8fa061d42382dbea59b6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819899adbbc8598ac6b1f6bc2e2dd06173a28791e8fa061d42382dbea59b6f5->enter($__internal_f819899adbbc8598ac6b1f6bc2e2dd06173a28791e8fa061d42382dbea59b6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bd7535bcb468e13d685415cb0e8a2dae43d46aa237311cada438d88b06bbce02->leave($__internal_bd7535bcb468e13d685415cb0e8a2dae43d46aa237311cada438d88b06bbce02_prof);

        
        $__internal_f819899adbbc8598ac6b1f6bc2e2dd06173a28791e8fa061d42382dbea59b6f5->leave($__internal_f819899adbbc8598ac6b1f6bc2e2dd06173a28791e8fa061d42382dbea59b6f5_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
