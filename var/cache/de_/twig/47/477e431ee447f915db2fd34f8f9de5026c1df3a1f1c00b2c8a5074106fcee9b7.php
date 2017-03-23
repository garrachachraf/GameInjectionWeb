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
        $__internal_9e53515e5625f68c3d58b990b7e586205f27f1b305eb36329dad3e04a8a89871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e53515e5625f68c3d58b990b7e586205f27f1b305eb36329dad3e04a8a89871->enter($__internal_9e53515e5625f68c3d58b990b7e586205f27f1b305eb36329dad3e04a8a89871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b7c7805c94c4e6f52152cdcde66113083031476f32862989037b5ec7cc311feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c7805c94c4e6f52152cdcde66113083031476f32862989037b5ec7cc311feb->enter($__internal_b7c7805c94c4e6f52152cdcde66113083031476f32862989037b5ec7cc311feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9e53515e5625f68c3d58b990b7e586205f27f1b305eb36329dad3e04a8a89871->leave($__internal_9e53515e5625f68c3d58b990b7e586205f27f1b305eb36329dad3e04a8a89871_prof);

        
        $__internal_b7c7805c94c4e6f52152cdcde66113083031476f32862989037b5ec7cc311feb->leave($__internal_b7c7805c94c4e6f52152cdcde66113083031476f32862989037b5ec7cc311feb_prof);

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
