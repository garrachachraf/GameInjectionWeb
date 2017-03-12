<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_91ee7b20aed63e331afc4378ba9317dcd140ace3828175445ab86d36ae84df69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ee7b20aed63e331afc4378ba9317dcd140ace3828175445ab86d36ae84df69->enter($__internal_91ee7b20aed63e331afc4378ba9317dcd140ace3828175445ab86d36ae84df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4e32238a6d7c471c5792acb7b8f1df2bed0043a66d50621e77550ffb1ed7520b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e32238a6d7c471c5792acb7b8f1df2bed0043a66d50621e77550ffb1ed7520b->enter($__internal_4e32238a6d7c471c5792acb7b8f1df2bed0043a66d50621e77550ffb1ed7520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_91ee7b20aed63e331afc4378ba9317dcd140ace3828175445ab86d36ae84df69->leave($__internal_91ee7b20aed63e331afc4378ba9317dcd140ace3828175445ab86d36ae84df69_prof);

        
        $__internal_4e32238a6d7c471c5792acb7b8f1df2bed0043a66d50621e77550ffb1ed7520b->leave($__internal_4e32238a6d7c471c5792acb7b8f1df2bed0043a66d50621e77550ffb1ed7520b_prof);

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
", "@Framework/Form/choice_options.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
