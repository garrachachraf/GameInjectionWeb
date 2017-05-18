<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1f6e363e0a3aad694412b8e8c8dd0a43574146c38de42cded23271a885eaeccf extends Twig_Template
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
        $__internal_c0aa87e4e89ea3031c15b1adadef285f2b394b054a8140b3082c39751cc5533b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0aa87e4e89ea3031c15b1adadef285f2b394b054a8140b3082c39751cc5533b->enter($__internal_c0aa87e4e89ea3031c15b1adadef285f2b394b054a8140b3082c39751cc5533b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5443d4e7c505bb61e85b2945e0d95da3c658ac50bd60bc1d951d31e5fd4fd91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5443d4e7c505bb61e85b2945e0d95da3c658ac50bd60bc1d951d31e5fd4fd91d->enter($__internal_5443d4e7c505bb61e85b2945e0d95da3c658ac50bd60bc1d951d31e5fd4fd91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c0aa87e4e89ea3031c15b1adadef285f2b394b054a8140b3082c39751cc5533b->leave($__internal_c0aa87e4e89ea3031c15b1adadef285f2b394b054a8140b3082c39751cc5533b_prof);

        
        $__internal_5443d4e7c505bb61e85b2945e0d95da3c658ac50bd60bc1d951d31e5fd4fd91d->leave($__internal_5443d4e7c505bb61e85b2945e0d95da3c658ac50bd60bc1d951d31e5fd4fd91d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
