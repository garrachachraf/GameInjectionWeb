<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_87261ac548219598e719ec7119bf10c12655c0660383e5f3cf84b710862f53f0 extends Twig_Template
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
        $__internal_d98d7c6995747b32de15a35bab70637aebd7dd608f1c036b902b92da1afe1125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98d7c6995747b32de15a35bab70637aebd7dd608f1c036b902b92da1afe1125->enter($__internal_d98d7c6995747b32de15a35bab70637aebd7dd608f1c036b902b92da1afe1125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fc06b46be4ca09ce2a3676853602123380ae129d7109cc7d883b67b1809a5a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc06b46be4ca09ce2a3676853602123380ae129d7109cc7d883b67b1809a5a0a->enter($__internal_fc06b46be4ca09ce2a3676853602123380ae129d7109cc7d883b67b1809a5a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d98d7c6995747b32de15a35bab70637aebd7dd608f1c036b902b92da1afe1125->leave($__internal_d98d7c6995747b32de15a35bab70637aebd7dd608f1c036b902b92da1afe1125_prof);

        
        $__internal_fc06b46be4ca09ce2a3676853602123380ae129d7109cc7d883b67b1809a5a0a->leave($__internal_fc06b46be4ca09ce2a3676853602123380ae129d7109cc7d883b67b1809a5a0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
