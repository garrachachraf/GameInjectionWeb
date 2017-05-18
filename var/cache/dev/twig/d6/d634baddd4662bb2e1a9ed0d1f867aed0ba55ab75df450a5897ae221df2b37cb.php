<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_fdc5fe9426bc83575f4c38cde828917258e5542d7958e5340e2521d71542fd12 extends Twig_Template
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
        $__internal_d25f74fd5e2a366fbd4eb123284dbc2577733c88287ea2de3529aa4d1df82e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25f74fd5e2a366fbd4eb123284dbc2577733c88287ea2de3529aa4d1df82e2d->enter($__internal_d25f74fd5e2a366fbd4eb123284dbc2577733c88287ea2de3529aa4d1df82e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_648a6d8ccee4e3b0c39890980258006e30a6365a68d542570170223ccdf4c5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648a6d8ccee4e3b0c39890980258006e30a6365a68d542570170223ccdf4c5c3->enter($__internal_648a6d8ccee4e3b0c39890980258006e30a6365a68d542570170223ccdf4c5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d25f74fd5e2a366fbd4eb123284dbc2577733c88287ea2de3529aa4d1df82e2d->leave($__internal_d25f74fd5e2a366fbd4eb123284dbc2577733c88287ea2de3529aa4d1df82e2d_prof);

        
        $__internal_648a6d8ccee4e3b0c39890980258006e30a6365a68d542570170223ccdf4c5c3->leave($__internal_648a6d8ccee4e3b0c39890980258006e30a6365a68d542570170223ccdf4c5c3_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
