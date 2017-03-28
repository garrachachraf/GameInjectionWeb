<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd73fd6e7315c51a88286dd640f0e589b10c7c52cae7dc713be9406e064ac837 extends Twig_Template
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
        $__internal_315dca48d95bf48dd19983ce1c2098cc6b60902f8d144f48e08c420c7bda3e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315dca48d95bf48dd19983ce1c2098cc6b60902f8d144f48e08c420c7bda3e5b->enter($__internal_315dca48d95bf48dd19983ce1c2098cc6b60902f8d144f48e08c420c7bda3e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2feca7df7dde61152b98601b69d790ae56796c8ff832c701799de21f12766d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2feca7df7dde61152b98601b69d790ae56796c8ff832c701799de21f12766d6d->enter($__internal_2feca7df7dde61152b98601b69d790ae56796c8ff832c701799de21f12766d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_315dca48d95bf48dd19983ce1c2098cc6b60902f8d144f48e08c420c7bda3e5b->leave($__internal_315dca48d95bf48dd19983ce1c2098cc6b60902f8d144f48e08c420c7bda3e5b_prof);

        
        $__internal_2feca7df7dde61152b98601b69d790ae56796c8ff832c701799de21f12766d6d->leave($__internal_2feca7df7dde61152b98601b69d790ae56796c8ff832c701799de21f12766d6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
