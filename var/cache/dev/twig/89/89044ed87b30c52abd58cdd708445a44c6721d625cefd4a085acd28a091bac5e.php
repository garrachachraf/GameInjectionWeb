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
        $__internal_84ca9118aa9dced4635b0b0e885e4064c48bedf4fa4c92446b92a1ce6bcfd2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ca9118aa9dced4635b0b0e885e4064c48bedf4fa4c92446b92a1ce6bcfd2f2->enter($__internal_84ca9118aa9dced4635b0b0e885e4064c48bedf4fa4c92446b92a1ce6bcfd2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c8d9c1342cfbbd7ee7815282417d923c78bb5a157d765026b4e0373b39f385bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d9c1342cfbbd7ee7815282417d923c78bb5a157d765026b4e0373b39f385bb->enter($__internal_c8d9c1342cfbbd7ee7815282417d923c78bb5a157d765026b4e0373b39f385bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_84ca9118aa9dced4635b0b0e885e4064c48bedf4fa4c92446b92a1ce6bcfd2f2->leave($__internal_84ca9118aa9dced4635b0b0e885e4064c48bedf4fa4c92446b92a1ce6bcfd2f2_prof);

        
        $__internal_c8d9c1342cfbbd7ee7815282417d923c78bb5a157d765026b4e0373b39f385bb->leave($__internal_c8d9c1342cfbbd7ee7815282417d923c78bb5a157d765026b4e0373b39f385bb_prof);

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
