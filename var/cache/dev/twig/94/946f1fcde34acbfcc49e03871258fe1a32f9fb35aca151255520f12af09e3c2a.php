<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_368085f390edc98d6e57cb305e91449f07dcc32c141c03c510a2229fd4b35252 extends Twig_Template
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
        $__internal_c931b8b24bb1af14417df5959d7487d9d6700e48e8b13007aba8bfe603b42df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c931b8b24bb1af14417df5959d7487d9d6700e48e8b13007aba8bfe603b42df0->enter($__internal_c931b8b24bb1af14417df5959d7487d9d6700e48e8b13007aba8bfe603b42df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_02b88f5752b6045781a9e59b1b09a2e7de63f8b58ced26a50d27fb2d6840d9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b88f5752b6045781a9e59b1b09a2e7de63f8b58ced26a50d27fb2d6840d9de->enter($__internal_02b88f5752b6045781a9e59b1b09a2e7de63f8b58ced26a50d27fb2d6840d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c931b8b24bb1af14417df5959d7487d9d6700e48e8b13007aba8bfe603b42df0->leave($__internal_c931b8b24bb1af14417df5959d7487d9d6700e48e8b13007aba8bfe603b42df0_prof);

        
        $__internal_02b88f5752b6045781a9e59b1b09a2e7de63f8b58ced26a50d27fb2d6840d9de->leave($__internal_02b88f5752b6045781a9e59b1b09a2e7de63f8b58ced26a50d27fb2d6840d9de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
