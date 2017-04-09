<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_add3672ef6a3f67a00a7458395ac57d883710e0130d84bf0171008fbedaac4da extends Twig_Template
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
        $__internal_bff477bced95df8d92d47f96d87b0224bd8f22e303a0b41c338e0caf6377cbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff477bced95df8d92d47f96d87b0224bd8f22e303a0b41c338e0caf6377cbea->enter($__internal_bff477bced95df8d92d47f96d87b0224bd8f22e303a0b41c338e0caf6377cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0e320966a04d9b06d542175028ee96d9cedf1bdb7f155ed74b249bdbe5cdf0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e320966a04d9b06d542175028ee96d9cedf1bdb7f155ed74b249bdbe5cdf0a7->enter($__internal_0e320966a04d9b06d542175028ee96d9cedf1bdb7f155ed74b249bdbe5cdf0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bff477bced95df8d92d47f96d87b0224bd8f22e303a0b41c338e0caf6377cbea->leave($__internal_bff477bced95df8d92d47f96d87b0224bd8f22e303a0b41c338e0caf6377cbea_prof);

        
        $__internal_0e320966a04d9b06d542175028ee96d9cedf1bdb7f155ed74b249bdbe5cdf0a7->leave($__internal_0e320966a04d9b06d542175028ee96d9cedf1bdb7f155ed74b249bdbe5cdf0a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
