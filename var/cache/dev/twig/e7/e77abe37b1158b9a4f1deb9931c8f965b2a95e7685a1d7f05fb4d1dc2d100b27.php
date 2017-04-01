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
        $__internal_fbf9f36dff20b9a04e1f4c58f1d4dd2f914c894622c6b2c1be709b1ea1b9df7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf9f36dff20b9a04e1f4c58f1d4dd2f914c894622c6b2c1be709b1ea1b9df7d->enter($__internal_fbf9f36dff20b9a04e1f4c58f1d4dd2f914c894622c6b2c1be709b1ea1b9df7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cf5ee89c1381a37495fbe518e49fa233a92c49ad8b4e487be8839902145db58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5ee89c1381a37495fbe518e49fa233a92c49ad8b4e487be8839902145db58a->enter($__internal_cf5ee89c1381a37495fbe518e49fa233a92c49ad8b4e487be8839902145db58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fbf9f36dff20b9a04e1f4c58f1d4dd2f914c894622c6b2c1be709b1ea1b9df7d->leave($__internal_fbf9f36dff20b9a04e1f4c58f1d4dd2f914c894622c6b2c1be709b1ea1b9df7d_prof);

        
        $__internal_cf5ee89c1381a37495fbe518e49fa233a92c49ad8b4e487be8839902145db58a->leave($__internal_cf5ee89c1381a37495fbe518e49fa233a92c49ad8b4e487be8839902145db58a_prof);

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
