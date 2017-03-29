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
        $__internal_ef9e310ed97f3d734998fdc9b6894759de18f82d1cbe6d19ed7921968fac2d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9e310ed97f3d734998fdc9b6894759de18f82d1cbe6d19ed7921968fac2d73->enter($__internal_ef9e310ed97f3d734998fdc9b6894759de18f82d1cbe6d19ed7921968fac2d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b2c3fd77ff0891f1c0f230243c500a385be6b4bbb737862f47c4084d07dc89e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c3fd77ff0891f1c0f230243c500a385be6b4bbb737862f47c4084d07dc89e9->enter($__internal_b2c3fd77ff0891f1c0f230243c500a385be6b4bbb737862f47c4084d07dc89e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ef9e310ed97f3d734998fdc9b6894759de18f82d1cbe6d19ed7921968fac2d73->leave($__internal_ef9e310ed97f3d734998fdc9b6894759de18f82d1cbe6d19ed7921968fac2d73_prof);

        
        $__internal_b2c3fd77ff0891f1c0f230243c500a385be6b4bbb737862f47c4084d07dc89e9->leave($__internal_b2c3fd77ff0891f1c0f230243c500a385be6b4bbb737862f47c4084d07dc89e9_prof);

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
