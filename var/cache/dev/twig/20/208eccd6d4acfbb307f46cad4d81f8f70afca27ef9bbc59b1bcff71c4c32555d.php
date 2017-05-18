<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e6a8bfc79834679badc821bba886475e5a1e2a453878af0bf52741adc82e3ea8 extends Twig_Template
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
        $__internal_a4d57660cd1efd7bc1fba413d294a0814cbf490840f9f6f19da1d7641de2b26e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d57660cd1efd7bc1fba413d294a0814cbf490840f9f6f19da1d7641de2b26e->enter($__internal_a4d57660cd1efd7bc1fba413d294a0814cbf490840f9f6f19da1d7641de2b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8bb3febf8b8b0358565d86a124d7bcc9efaed60328ad07751762f3aae35a3389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb3febf8b8b0358565d86a124d7bcc9efaed60328ad07751762f3aae35a3389->enter($__internal_8bb3febf8b8b0358565d86a124d7bcc9efaed60328ad07751762f3aae35a3389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a4d57660cd1efd7bc1fba413d294a0814cbf490840f9f6f19da1d7641de2b26e->leave($__internal_a4d57660cd1efd7bc1fba413d294a0814cbf490840f9f6f19da1d7641de2b26e_prof);

        
        $__internal_8bb3febf8b8b0358565d86a124d7bcc9efaed60328ad07751762f3aae35a3389->leave($__internal_8bb3febf8b8b0358565d86a124d7bcc9efaed60328ad07751762f3aae35a3389_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
