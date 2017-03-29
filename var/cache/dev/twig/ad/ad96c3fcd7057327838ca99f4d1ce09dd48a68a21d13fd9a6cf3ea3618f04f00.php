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
        $__internal_3361343ed451ad8c65830734f61274e726dafeeed1e9e393ef4578db103db4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3361343ed451ad8c65830734f61274e726dafeeed1e9e393ef4578db103db4af->enter($__internal_3361343ed451ad8c65830734f61274e726dafeeed1e9e393ef4578db103db4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8b4efbe51320f2746f4413564d2f167cb02b04aa03dbc22df365147e85e50ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4efbe51320f2746f4413564d2f167cb02b04aa03dbc22df365147e85e50ddb->enter($__internal_8b4efbe51320f2746f4413564d2f167cb02b04aa03dbc22df365147e85e50ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3361343ed451ad8c65830734f61274e726dafeeed1e9e393ef4578db103db4af->leave($__internal_3361343ed451ad8c65830734f61274e726dafeeed1e9e393ef4578db103db4af_prof);

        
        $__internal_8b4efbe51320f2746f4413564d2f167cb02b04aa03dbc22df365147e85e50ddb->leave($__internal_8b4efbe51320f2746f4413564d2f167cb02b04aa03dbc22df365147e85e50ddb_prof);

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
