<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3006a7623bc0d3d900b89640a3eb95169bbf66e2dfa4c530611a78185adfe994 extends Twig_Template
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
        $__internal_43ed91f73eef4da50b364a520f509c0f2853c651f06ac2ca65d89d982c4f32e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ed91f73eef4da50b364a520f509c0f2853c651f06ac2ca65d89d982c4f32e8->enter($__internal_43ed91f73eef4da50b364a520f509c0f2853c651f06ac2ca65d89d982c4f32e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b5c1c9e02e87d597ed2cd690444265d94571964933af943ad09fb7d74333da02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c1c9e02e87d597ed2cd690444265d94571964933af943ad09fb7d74333da02->enter($__internal_b5c1c9e02e87d597ed2cd690444265d94571964933af943ad09fb7d74333da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_43ed91f73eef4da50b364a520f509c0f2853c651f06ac2ca65d89d982c4f32e8->leave($__internal_43ed91f73eef4da50b364a520f509c0f2853c651f06ac2ca65d89d982c4f32e8_prof);

        
        $__internal_b5c1c9e02e87d597ed2cd690444265d94571964933af943ad09fb7d74333da02->leave($__internal_b5c1c9e02e87d597ed2cd690444265d94571964933af943ad09fb7d74333da02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
