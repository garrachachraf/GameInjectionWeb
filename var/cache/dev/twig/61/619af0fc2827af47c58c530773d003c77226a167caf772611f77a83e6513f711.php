<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3dc0418d96bc3b000e87ad5e8e6c2cf073117378e8c4b75194b6ae08c64a86b1 extends Twig_Template
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
        $__internal_7ae041a81037fad8536d0eac499c1fa89ea2f3e320ca32639533d5fcce243ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae041a81037fad8536d0eac499c1fa89ea2f3e320ca32639533d5fcce243ed8->enter($__internal_7ae041a81037fad8536d0eac499c1fa89ea2f3e320ca32639533d5fcce243ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_478ffc15e109ad517428fc48a97b94f9425cbe47077e04d911d60a19d0a8c8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478ffc15e109ad517428fc48a97b94f9425cbe47077e04d911d60a19d0a8c8cf->enter($__internal_478ffc15e109ad517428fc48a97b94f9425cbe47077e04d911d60a19d0a8c8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7ae041a81037fad8536d0eac499c1fa89ea2f3e320ca32639533d5fcce243ed8->leave($__internal_7ae041a81037fad8536d0eac499c1fa89ea2f3e320ca32639533d5fcce243ed8_prof);

        
        $__internal_478ffc15e109ad517428fc48a97b94f9425cbe47077e04d911d60a19d0a8c8cf->leave($__internal_478ffc15e109ad517428fc48a97b94f9425cbe47077e04d911d60a19d0a8c8cf_prof);

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
