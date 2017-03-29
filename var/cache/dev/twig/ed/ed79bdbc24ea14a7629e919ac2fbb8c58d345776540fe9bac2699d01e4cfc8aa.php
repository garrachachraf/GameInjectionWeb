<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8950311a0a97302ffc2cd978334442161deaa6c691d2e4ae6a776e160789542b extends Twig_Template
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
        $__internal_330ef1eabbeece6acd993bc62c7eeeb6be09ead17a85828e433d666b49b6c3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330ef1eabbeece6acd993bc62c7eeeb6be09ead17a85828e433d666b49b6c3a2->enter($__internal_330ef1eabbeece6acd993bc62c7eeeb6be09ead17a85828e433d666b49b6c3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0dbbab3af279de8a45132f938fdce4df698231aa357de1eb6d37eb017b686126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbbab3af279de8a45132f938fdce4df698231aa357de1eb6d37eb017b686126->enter($__internal_0dbbab3af279de8a45132f938fdce4df698231aa357de1eb6d37eb017b686126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_330ef1eabbeece6acd993bc62c7eeeb6be09ead17a85828e433d666b49b6c3a2->leave($__internal_330ef1eabbeece6acd993bc62c7eeeb6be09ead17a85828e433d666b49b6c3a2_prof);

        
        $__internal_0dbbab3af279de8a45132f938fdce4df698231aa357de1eb6d37eb017b686126->leave($__internal_0dbbab3af279de8a45132f938fdce4df698231aa357de1eb6d37eb017b686126_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
