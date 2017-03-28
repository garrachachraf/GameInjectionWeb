<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_76f1cda471b5404dd4ce616282cd00350922afcc7f4fc17ed16e063222d3c6a6 extends Twig_Template
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
        $__internal_a1600d5d26ab6f6e03b9c5c1094cdcd50a2bf80b04b2c3193a72e3ac9c3560fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1600d5d26ab6f6e03b9c5c1094cdcd50a2bf80b04b2c3193a72e3ac9c3560fc->enter($__internal_a1600d5d26ab6f6e03b9c5c1094cdcd50a2bf80b04b2c3193a72e3ac9c3560fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f165a5c0405e39e2336381e41535ab054271319576b2f417cdc754140f3a3531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f165a5c0405e39e2336381e41535ab054271319576b2f417cdc754140f3a3531->enter($__internal_f165a5c0405e39e2336381e41535ab054271319576b2f417cdc754140f3a3531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a1600d5d26ab6f6e03b9c5c1094cdcd50a2bf80b04b2c3193a72e3ac9c3560fc->leave($__internal_a1600d5d26ab6f6e03b9c5c1094cdcd50a2bf80b04b2c3193a72e3ac9c3560fc_prof);

        
        $__internal_f165a5c0405e39e2336381e41535ab054271319576b2f417cdc754140f3a3531->leave($__internal_f165a5c0405e39e2336381e41535ab054271319576b2f417cdc754140f3a3531_prof);

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
