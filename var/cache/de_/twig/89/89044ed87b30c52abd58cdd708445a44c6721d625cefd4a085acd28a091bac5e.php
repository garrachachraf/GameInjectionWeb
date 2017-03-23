<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_eadb7737c3bccb4b29bf441e6bf5cf227e32f76b3f7cdb2d2d6e12011030d530 extends Twig_Template
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
        $__internal_b63d5af1dc726fee836b9fe6041e1f68715b4b763bdf326214f41208c8d3a0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63d5af1dc726fee836b9fe6041e1f68715b4b763bdf326214f41208c8d3a0a8->enter($__internal_b63d5af1dc726fee836b9fe6041e1f68715b4b763bdf326214f41208c8d3a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_365b23b23276cbcd996f1d32311ae84c7a4cce3e37a434947a540b9cb6f00fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365b23b23276cbcd996f1d32311ae84c7a4cce3e37a434947a540b9cb6f00fa2->enter($__internal_365b23b23276cbcd996f1d32311ae84c7a4cce3e37a434947a540b9cb6f00fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b63d5af1dc726fee836b9fe6041e1f68715b4b763bdf326214f41208c8d3a0a8->leave($__internal_b63d5af1dc726fee836b9fe6041e1f68715b4b763bdf326214f41208c8d3a0a8_prof);

        
        $__internal_365b23b23276cbcd996f1d32311ae84c7a4cce3e37a434947a540b9cb6f00fa2->leave($__internal_365b23b23276cbcd996f1d32311ae84c7a4cce3e37a434947a540b9cb6f00fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
