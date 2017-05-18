<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9ac31b3464c1abec5ae3eec29dca5a99ff8c5758db113a5d9952bb36e257ef5e extends Twig_Template
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
        $__internal_4de6bfca4f51a4712bd59b51ee87251fdfb2dfb1736b19d97181d80b98b12944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de6bfca4f51a4712bd59b51ee87251fdfb2dfb1736b19d97181d80b98b12944->enter($__internal_4de6bfca4f51a4712bd59b51ee87251fdfb2dfb1736b19d97181d80b98b12944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b7b612e42e90e4f8da68d356d48357155f12d28f63339fe941d317c4188b1801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b612e42e90e4f8da68d356d48357155f12d28f63339fe941d317c4188b1801->enter($__internal_b7b612e42e90e4f8da68d356d48357155f12d28f63339fe941d317c4188b1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4de6bfca4f51a4712bd59b51ee87251fdfb2dfb1736b19d97181d80b98b12944->leave($__internal_4de6bfca4f51a4712bd59b51ee87251fdfb2dfb1736b19d97181d80b98b12944_prof);

        
        $__internal_b7b612e42e90e4f8da68d356d48357155f12d28f63339fe941d317c4188b1801->leave($__internal_b7b612e42e90e4f8da68d356d48357155f12d28f63339fe941d317c4188b1801_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
