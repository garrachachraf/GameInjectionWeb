<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f37504d08c7b74ee457cf5ea54d812efaa6783e257332b4edcf650eed1145fee extends Twig_Template
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
        $__internal_d14d17bed356d2a1500256d2f2b100463a6c9e3baa5a2b5968f42db54fc50e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14d17bed356d2a1500256d2f2b100463a6c9e3baa5a2b5968f42db54fc50e34->enter($__internal_d14d17bed356d2a1500256d2f2b100463a6c9e3baa5a2b5968f42db54fc50e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2b2a1d691fd635c1864e0a15575814af7eb3d95c30308cd06a53bc3895ac078d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2a1d691fd635c1864e0a15575814af7eb3d95c30308cd06a53bc3895ac078d->enter($__internal_2b2a1d691fd635c1864e0a15575814af7eb3d95c30308cd06a53bc3895ac078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d14d17bed356d2a1500256d2f2b100463a6c9e3baa5a2b5968f42db54fc50e34->leave($__internal_d14d17bed356d2a1500256d2f2b100463a6c9e3baa5a2b5968f42db54fc50e34_prof);

        
        $__internal_2b2a1d691fd635c1864e0a15575814af7eb3d95c30308cd06a53bc3895ac078d->leave($__internal_2b2a1d691fd635c1864e0a15575814af7eb3d95c30308cd06a53bc3895ac078d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}