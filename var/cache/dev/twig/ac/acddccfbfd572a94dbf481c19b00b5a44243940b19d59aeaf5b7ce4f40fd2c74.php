<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_cb10c9119dc3b4949ad5c63df333ac7e2cbf233da89ceac8a1c9330869360385 extends Twig_Template
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
        $__internal_26a53f7d3e3f2bdb75fecbac111ec6a86c51f86304d7916b4e4d1acd0d2f1e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a53f7d3e3f2bdb75fecbac111ec6a86c51f86304d7916b4e4d1acd0d2f1e68->enter($__internal_26a53f7d3e3f2bdb75fecbac111ec6a86c51f86304d7916b4e4d1acd0d2f1e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3cbbdd41bc045c0d0485e107cb9089bd75411df3105dcec9125df8f28729c092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbbdd41bc045c0d0485e107cb9089bd75411df3105dcec9125df8f28729c092->enter($__internal_3cbbdd41bc045c0d0485e107cb9089bd75411df3105dcec9125df8f28729c092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_26a53f7d3e3f2bdb75fecbac111ec6a86c51f86304d7916b4e4d1acd0d2f1e68->leave($__internal_26a53f7d3e3f2bdb75fecbac111ec6a86c51f86304d7916b4e4d1acd0d2f1e68_prof);

        
        $__internal_3cbbdd41bc045c0d0485e107cb9089bd75411df3105dcec9125df8f28729c092->leave($__internal_3cbbdd41bc045c0d0485e107cb9089bd75411df3105dcec9125df8f28729c092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
