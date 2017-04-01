<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ead3a78587091091c1e56ad6eae00e3cd6a1499ba301584111001260754bbcb2 extends Twig_Template
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
        $__internal_98d4a94af551db769884f13a86ea2ab0667b1a721f280b7523d8ff8f2e90b873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d4a94af551db769884f13a86ea2ab0667b1a721f280b7523d8ff8f2e90b873->enter($__internal_98d4a94af551db769884f13a86ea2ab0667b1a721f280b7523d8ff8f2e90b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0459b7bee34f5d61f32c1e21ac9077675873c714f1fe715a3aa0360cf06c31e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0459b7bee34f5d61f32c1e21ac9077675873c714f1fe715a3aa0360cf06c31e3->enter($__internal_0459b7bee34f5d61f32c1e21ac9077675873c714f1fe715a3aa0360cf06c31e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_98d4a94af551db769884f13a86ea2ab0667b1a721f280b7523d8ff8f2e90b873->leave($__internal_98d4a94af551db769884f13a86ea2ab0667b1a721f280b7523d8ff8f2e90b873_prof);

        
        $__internal_0459b7bee34f5d61f32c1e21ac9077675873c714f1fe715a3aa0360cf06c31e3->leave($__internal_0459b7bee34f5d61f32c1e21ac9077675873c714f1fe715a3aa0360cf06c31e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
