<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7b0fe8ee7ef8fd8e378d56ff494214f92369a0aa63173e8984ad310f71c7e4ef extends Twig_Template
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
        $__internal_d5c9b83ec006b3c6b1364d664ddc77b371ece3ecab4386cccdb111d9c0aeb440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c9b83ec006b3c6b1364d664ddc77b371ece3ecab4386cccdb111d9c0aeb440->enter($__internal_d5c9b83ec006b3c6b1364d664ddc77b371ece3ecab4386cccdb111d9c0aeb440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4061c107ed086e30c07b4ad2e89add6d681a014dfb1447673ef46d69a1b87428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4061c107ed086e30c07b4ad2e89add6d681a014dfb1447673ef46d69a1b87428->enter($__internal_4061c107ed086e30c07b4ad2e89add6d681a014dfb1447673ef46d69a1b87428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d5c9b83ec006b3c6b1364d664ddc77b371ece3ecab4386cccdb111d9c0aeb440->leave($__internal_d5c9b83ec006b3c6b1364d664ddc77b371ece3ecab4386cccdb111d9c0aeb440_prof);

        
        $__internal_4061c107ed086e30c07b4ad2e89add6d681a014dfb1447673ef46d69a1b87428->leave($__internal_4061c107ed086e30c07b4ad2e89add6d681a014dfb1447673ef46d69a1b87428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
