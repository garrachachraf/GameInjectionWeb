<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fbec2c376f212600105846c348f93db19590a114bdfb973bf78719d0e66c0fe7 extends Twig_Template
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
        $__internal_8da90d4cd7d5f2f0061c2291c8432a471af589828a9868347f7f2d16769cdc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da90d4cd7d5f2f0061c2291c8432a471af589828a9868347f7f2d16769cdc75->enter($__internal_8da90d4cd7d5f2f0061c2291c8432a471af589828a9868347f7f2d16769cdc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5e7db31b92422aeb51d17db5530e4f3690a15c9ad0761c1033ef306286dceb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7db31b92422aeb51d17db5530e4f3690a15c9ad0761c1033ef306286dceb4b->enter($__internal_5e7db31b92422aeb51d17db5530e4f3690a15c9ad0761c1033ef306286dceb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8da90d4cd7d5f2f0061c2291c8432a471af589828a9868347f7f2d16769cdc75->leave($__internal_8da90d4cd7d5f2f0061c2291c8432a471af589828a9868347f7f2d16769cdc75_prof);

        
        $__internal_5e7db31b92422aeb51d17db5530e4f3690a15c9ad0761c1033ef306286dceb4b->leave($__internal_5e7db31b92422aeb51d17db5530e4f3690a15c9ad0761c1033ef306286dceb4b_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
