<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_faabd321cb93de050d50bb788ebdcb7ba2e7543369f9ea50cdf52d262df8c725 extends Twig_Template
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
        $__internal_ff341336ca6a74247c89eeb5a70dd109dc10b2b3ee75fddc9116f1aad11ae953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff341336ca6a74247c89eeb5a70dd109dc10b2b3ee75fddc9116f1aad11ae953->enter($__internal_ff341336ca6a74247c89eeb5a70dd109dc10b2b3ee75fddc9116f1aad11ae953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ed91f61e1d0a6627127dbd7b610859e81a00f5a74dc197bf95b8fcd23cac03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed91f61e1d0a6627127dbd7b610859e81a00f5a74dc197bf95b8fcd23cac03ce->enter($__internal_ed91f61e1d0a6627127dbd7b610859e81a00f5a74dc197bf95b8fcd23cac03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ff341336ca6a74247c89eeb5a70dd109dc10b2b3ee75fddc9116f1aad11ae953->leave($__internal_ff341336ca6a74247c89eeb5a70dd109dc10b2b3ee75fddc9116f1aad11ae953_prof);

        
        $__internal_ed91f61e1d0a6627127dbd7b610859e81a00f5a74dc197bf95b8fcd23cac03ce->leave($__internal_ed91f61e1d0a6627127dbd7b610859e81a00f5a74dc197bf95b8fcd23cac03ce_prof);

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
