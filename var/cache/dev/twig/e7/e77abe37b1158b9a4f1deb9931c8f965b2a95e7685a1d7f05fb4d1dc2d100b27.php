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
        $__internal_e793718e6e9eaeded8980eca39e123f8177d78ff55929da9a86287faaa923c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e793718e6e9eaeded8980eca39e123f8177d78ff55929da9a86287faaa923c44->enter($__internal_e793718e6e9eaeded8980eca39e123f8177d78ff55929da9a86287faaa923c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1c08fc41ec42a350934d7940ae2c76f354b35f5be1046d2c77dbac54633711e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c08fc41ec42a350934d7940ae2c76f354b35f5be1046d2c77dbac54633711e2->enter($__internal_1c08fc41ec42a350934d7940ae2c76f354b35f5be1046d2c77dbac54633711e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e793718e6e9eaeded8980eca39e123f8177d78ff55929da9a86287faaa923c44->leave($__internal_e793718e6e9eaeded8980eca39e123f8177d78ff55929da9a86287faaa923c44_prof);

        
        $__internal_1c08fc41ec42a350934d7940ae2c76f354b35f5be1046d2c77dbac54633711e2->leave($__internal_1c08fc41ec42a350934d7940ae2c76f354b35f5be1046d2c77dbac54633711e2_prof);

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
