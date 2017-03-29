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
        $__internal_fbb041cf6f13d15b4cd4084a0e96adc3031da13ea2765072d3c44206d762264f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb041cf6f13d15b4cd4084a0e96adc3031da13ea2765072d3c44206d762264f->enter($__internal_fbb041cf6f13d15b4cd4084a0e96adc3031da13ea2765072d3c44206d762264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0aa90abc0c6c3dfa81e87fd44671ff65f5abff9ea68efc4d1e36fbd97fb20fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa90abc0c6c3dfa81e87fd44671ff65f5abff9ea68efc4d1e36fbd97fb20fea->enter($__internal_0aa90abc0c6c3dfa81e87fd44671ff65f5abff9ea68efc4d1e36fbd97fb20fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fbb041cf6f13d15b4cd4084a0e96adc3031da13ea2765072d3c44206d762264f->leave($__internal_fbb041cf6f13d15b4cd4084a0e96adc3031da13ea2765072d3c44206d762264f_prof);

        
        $__internal_0aa90abc0c6c3dfa81e87fd44671ff65f5abff9ea68efc4d1e36fbd97fb20fea->leave($__internal_0aa90abc0c6c3dfa81e87fd44671ff65f5abff9ea68efc4d1e36fbd97fb20fea_prof);

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
