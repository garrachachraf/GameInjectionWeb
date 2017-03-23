<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cb8e3d9eb85b2440401453f40f582251da7a7e7928e58de0d53f580dbd8c8abc extends Twig_Template
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
        $__internal_b1440ec59622e18950982ce14de4f8082a90219584689352b8ac1abc6d7cf8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1440ec59622e18950982ce14de4f8082a90219584689352b8ac1abc6d7cf8e6->enter($__internal_b1440ec59622e18950982ce14de4f8082a90219584689352b8ac1abc6d7cf8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_39ad6ddcaae3dc931cd535e2d5dc73c034b337ae682e55e2e0cfe056bfb9bf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ad6ddcaae3dc931cd535e2d5dc73c034b337ae682e55e2e0cfe056bfb9bf0b->enter($__internal_39ad6ddcaae3dc931cd535e2d5dc73c034b337ae682e55e2e0cfe056bfb9bf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b1440ec59622e18950982ce14de4f8082a90219584689352b8ac1abc6d7cf8e6->leave($__internal_b1440ec59622e18950982ce14de4f8082a90219584689352b8ac1abc6d7cf8e6_prof);

        
        $__internal_39ad6ddcaae3dc931cd535e2d5dc73c034b337ae682e55e2e0cfe056bfb9bf0b->leave($__internal_39ad6ddcaae3dc931cd535e2d5dc73c034b337ae682e55e2e0cfe056bfb9bf0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
