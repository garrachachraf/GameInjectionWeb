<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_bfe529ffa53382f6c4260e4d0f8aa29cbc523bb1d87ba9e026fe72e983775387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe529ffa53382f6c4260e4d0f8aa29cbc523bb1d87ba9e026fe72e983775387->enter($__internal_bfe529ffa53382f6c4260e4d0f8aa29cbc523bb1d87ba9e026fe72e983775387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_167d4d839901d97994bf29075c8f13ed050f3f70158741251028d7ce9c710dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d4d839901d97994bf29075c8f13ed050f3f70158741251028d7ce9c710dc0->enter($__internal_167d4d839901d97994bf29075c8f13ed050f3f70158741251028d7ce9c710dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bfe529ffa53382f6c4260e4d0f8aa29cbc523bb1d87ba9e026fe72e983775387->leave($__internal_bfe529ffa53382f6c4260e4d0f8aa29cbc523bb1d87ba9e026fe72e983775387_prof);

        
        $__internal_167d4d839901d97994bf29075c8f13ed050f3f70158741251028d7ce9c710dc0->leave($__internal_167d4d839901d97994bf29075c8f13ed050f3f70158741251028d7ce9c710dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
