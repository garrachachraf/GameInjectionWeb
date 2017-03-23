<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bd88f0b52cd4cb6ef6a1afebf43fc114053a4041840b67e60cf69877e7002b0a extends Twig_Template
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
        $__internal_9612f974581b180155f0dc7aa8abc483e7ee187639c6b7151716906fa42305f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9612f974581b180155f0dc7aa8abc483e7ee187639c6b7151716906fa42305f7->enter($__internal_9612f974581b180155f0dc7aa8abc483e7ee187639c6b7151716906fa42305f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7836c0138055f5e8b38fc2f7a50d81f81a0138b00d3ecf52b68d6b14c80c0351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7836c0138055f5e8b38fc2f7a50d81f81a0138b00d3ecf52b68d6b14c80c0351->enter($__internal_7836c0138055f5e8b38fc2f7a50d81f81a0138b00d3ecf52b68d6b14c80c0351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9612f974581b180155f0dc7aa8abc483e7ee187639c6b7151716906fa42305f7->leave($__internal_9612f974581b180155f0dc7aa8abc483e7ee187639c6b7151716906fa42305f7_prof);

        
        $__internal_7836c0138055f5e8b38fc2f7a50d81f81a0138b00d3ecf52b68d6b14c80c0351->leave($__internal_7836c0138055f5e8b38fc2f7a50d81f81a0138b00d3ecf52b68d6b14c80c0351_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
