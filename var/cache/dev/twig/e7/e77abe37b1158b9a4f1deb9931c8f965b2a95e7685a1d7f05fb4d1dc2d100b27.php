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
        $__internal_cde794de9a1faaf82fa19fc29c1807f425b341c671d7b6c2d0cbcd1b8e957bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde794de9a1faaf82fa19fc29c1807f425b341c671d7b6c2d0cbcd1b8e957bcb->enter($__internal_cde794de9a1faaf82fa19fc29c1807f425b341c671d7b6c2d0cbcd1b8e957bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_09b344de84d66d036c17191bb9d5a36c4c3e326cf2c870cc70fc5486f5d1a0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b344de84d66d036c17191bb9d5a36c4c3e326cf2c870cc70fc5486f5d1a0bc->enter($__internal_09b344de84d66d036c17191bb9d5a36c4c3e326cf2c870cc70fc5486f5d1a0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cde794de9a1faaf82fa19fc29c1807f425b341c671d7b6c2d0cbcd1b8e957bcb->leave($__internal_cde794de9a1faaf82fa19fc29c1807f425b341c671d7b6c2d0cbcd1b8e957bcb_prof);

        
        $__internal_09b344de84d66d036c17191bb9d5a36c4c3e326cf2c870cc70fc5486f5d1a0bc->leave($__internal_09b344de84d66d036c17191bb9d5a36c4c3e326cf2c870cc70fc5486f5d1a0bc_prof);

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
