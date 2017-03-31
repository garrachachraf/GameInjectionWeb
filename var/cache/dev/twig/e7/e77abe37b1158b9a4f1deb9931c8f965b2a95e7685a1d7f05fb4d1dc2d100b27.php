<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c9a117c0b140f92f427d6ae8d5f8ff246a253bdf3c82e35602e0dd5e9be33a1e extends Twig_Template
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
        $__internal_34bc64d64409706c34e3ec78ffb5d134d43e088490c46e2d647d2b3b765b88d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bc64d64409706c34e3ec78ffb5d134d43e088490c46e2d647d2b3b765b88d6->enter($__internal_34bc64d64409706c34e3ec78ffb5d134d43e088490c46e2d647d2b3b765b88d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7420e7e494722b06af3460348551108595cabbefd095ec38df1a8846b8cbbe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7420e7e494722b06af3460348551108595cabbefd095ec38df1a8846b8cbbe71->enter($__internal_7420e7e494722b06af3460348551108595cabbefd095ec38df1a8846b8cbbe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_34bc64d64409706c34e3ec78ffb5d134d43e088490c46e2d647d2b3b765b88d6->leave($__internal_34bc64d64409706c34e3ec78ffb5d134d43e088490c46e2d647d2b3b765b88d6_prof);

        
        $__internal_7420e7e494722b06af3460348551108595cabbefd095ec38df1a8846b8cbbe71->leave($__internal_7420e7e494722b06af3460348551108595cabbefd095ec38df1a8846b8cbbe71_prof);

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
