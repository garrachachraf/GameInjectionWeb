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
        $__internal_2a4798c4136978360d6ce8c3aab8450d07f1798740e8a12db7ef76c95ae16bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4798c4136978360d6ce8c3aab8450d07f1798740e8a12db7ef76c95ae16bad->enter($__internal_2a4798c4136978360d6ce8c3aab8450d07f1798740e8a12db7ef76c95ae16bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_54ae30c2ebf1bda92cb922a8f5cdfecb9d40147d0d821465a43b1bd0df4a3498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ae30c2ebf1bda92cb922a8f5cdfecb9d40147d0d821465a43b1bd0df4a3498->enter($__internal_54ae30c2ebf1bda92cb922a8f5cdfecb9d40147d0d821465a43b1bd0df4a3498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2a4798c4136978360d6ce8c3aab8450d07f1798740e8a12db7ef76c95ae16bad->leave($__internal_2a4798c4136978360d6ce8c3aab8450d07f1798740e8a12db7ef76c95ae16bad_prof);

        
        $__internal_54ae30c2ebf1bda92cb922a8f5cdfecb9d40147d0d821465a43b1bd0df4a3498->leave($__internal_54ae30c2ebf1bda92cb922a8f5cdfecb9d40147d0d821465a43b1bd0df4a3498_prof);

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
