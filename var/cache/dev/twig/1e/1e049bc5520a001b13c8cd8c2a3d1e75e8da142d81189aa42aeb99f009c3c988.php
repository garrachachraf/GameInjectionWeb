<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c056c8a56280ec1e36bb26e6d4aeee590f26b0e947e0ed3576d6230e1125e8b7 extends Twig_Template
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
        $__internal_05643fd66940b2ed76303a165407105a45c4b55fc50e0a3bd20e8f98822eb5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05643fd66940b2ed76303a165407105a45c4b55fc50e0a3bd20e8f98822eb5f1->enter($__internal_05643fd66940b2ed76303a165407105a45c4b55fc50e0a3bd20e8f98822eb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d23aeb2c885bbc9a3ce80bdf06898540d4e6eef679286dece3ed06317ba6cd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23aeb2c885bbc9a3ce80bdf06898540d4e6eef679286dece3ed06317ba6cd32->enter($__internal_d23aeb2c885bbc9a3ce80bdf06898540d4e6eef679286dece3ed06317ba6cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_05643fd66940b2ed76303a165407105a45c4b55fc50e0a3bd20e8f98822eb5f1->leave($__internal_05643fd66940b2ed76303a165407105a45c4b55fc50e0a3bd20e8f98822eb5f1_prof);

        
        $__internal_d23aeb2c885bbc9a3ce80bdf06898540d4e6eef679286dece3ed06317ba6cd32->leave($__internal_d23aeb2c885bbc9a3ce80bdf06898540d4e6eef679286dece3ed06317ba6cd32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
