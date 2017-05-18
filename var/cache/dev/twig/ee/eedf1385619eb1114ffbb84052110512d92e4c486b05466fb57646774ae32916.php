<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4831cc23309407647fc087773eb5676e341247495fa50558fa433910d4175709 extends Twig_Template
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
        $__internal_b379df1543d4897fbad42659cb046f96a1296ef4b8e5c6ac4d5612268dd688c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b379df1543d4897fbad42659cb046f96a1296ef4b8e5c6ac4d5612268dd688c4->enter($__internal_b379df1543d4897fbad42659cb046f96a1296ef4b8e5c6ac4d5612268dd688c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d5f6347a5f2fdbc89450ca0a409c2e2379ef817fa69904c37e1a0d6a8d42ac7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f6347a5f2fdbc89450ca0a409c2e2379ef817fa69904c37e1a0d6a8d42ac7a->enter($__internal_d5f6347a5f2fdbc89450ca0a409c2e2379ef817fa69904c37e1a0d6a8d42ac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b379df1543d4897fbad42659cb046f96a1296ef4b8e5c6ac4d5612268dd688c4->leave($__internal_b379df1543d4897fbad42659cb046f96a1296ef4b8e5c6ac4d5612268dd688c4_prof);

        
        $__internal_d5f6347a5f2fdbc89450ca0a409c2e2379ef817fa69904c37e1a0d6a8d42ac7a->leave($__internal_d5f6347a5f2fdbc89450ca0a409c2e2379ef817fa69904c37e1a0d6a8d42ac7a_prof);

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
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
