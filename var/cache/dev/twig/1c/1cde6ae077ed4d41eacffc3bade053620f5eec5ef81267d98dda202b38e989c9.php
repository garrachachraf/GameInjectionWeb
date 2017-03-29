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
        $__internal_88c6fb2dc2babe6bacff5dde67314a04457cee61300f4540262d6435cf62b4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c6fb2dc2babe6bacff5dde67314a04457cee61300f4540262d6435cf62b4d1->enter($__internal_88c6fb2dc2babe6bacff5dde67314a04457cee61300f4540262d6435cf62b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e6c37b0688a20e607693e7da0922ca4650b8b401cc465a730cfc3abd8426bfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c37b0688a20e607693e7da0922ca4650b8b401cc465a730cfc3abd8426bfd9->enter($__internal_e6c37b0688a20e607693e7da0922ca4650b8b401cc465a730cfc3abd8426bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_88c6fb2dc2babe6bacff5dde67314a04457cee61300f4540262d6435cf62b4d1->leave($__internal_88c6fb2dc2babe6bacff5dde67314a04457cee61300f4540262d6435cf62b4d1_prof);

        
        $__internal_e6c37b0688a20e607693e7da0922ca4650b8b401cc465a730cfc3abd8426bfd9->leave($__internal_e6c37b0688a20e607693e7da0922ca4650b8b401cc465a730cfc3abd8426bfd9_prof);

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
