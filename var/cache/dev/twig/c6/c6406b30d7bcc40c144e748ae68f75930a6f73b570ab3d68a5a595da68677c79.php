<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bdfebe2f35f2462d0a22b73f78664045790a8ed3b94492e78b435c5a27e6ca08 extends Twig_Template
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
        $__internal_c05b1c6a50c15870c69f0fbb722da562c80b105fbe8fe97c6ed2c3d3f31a1420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05b1c6a50c15870c69f0fbb722da562c80b105fbe8fe97c6ed2c3d3f31a1420->enter($__internal_c05b1c6a50c15870c69f0fbb722da562c80b105fbe8fe97c6ed2c3d3f31a1420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_decea4a5628dd6935e5feaa9f080e0d7f25e87adc2e90f16e1b9bf71cc8c9b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decea4a5628dd6935e5feaa9f080e0d7f25e87adc2e90f16e1b9bf71cc8c9b3a->enter($__internal_decea4a5628dd6935e5feaa9f080e0d7f25e87adc2e90f16e1b9bf71cc8c9b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c05b1c6a50c15870c69f0fbb722da562c80b105fbe8fe97c6ed2c3d3f31a1420->leave($__internal_c05b1c6a50c15870c69f0fbb722da562c80b105fbe8fe97c6ed2c3d3f31a1420_prof);

        
        $__internal_decea4a5628dd6935e5feaa9f080e0d7f25e87adc2e90f16e1b9bf71cc8c9b3a->leave($__internal_decea4a5628dd6935e5feaa9f080e0d7f25e87adc2e90f16e1b9bf71cc8c9b3a_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
