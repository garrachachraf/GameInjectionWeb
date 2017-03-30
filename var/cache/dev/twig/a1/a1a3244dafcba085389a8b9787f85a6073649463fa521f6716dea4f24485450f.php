<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f51c0aae0db50ba48225198c4380051bf858e8783a09f47ebe023147bdeddea5 extends Twig_Template
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
        $__internal_369dd8948bbac0aca4cf188b37e08eebc068c863f19cf32337775b97671eaa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369dd8948bbac0aca4cf188b37e08eebc068c863f19cf32337775b97671eaa75->enter($__internal_369dd8948bbac0aca4cf188b37e08eebc068c863f19cf32337775b97671eaa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_738c43d49322491c2ee5b1cbf792f87e9577bdc7b8e828a430481ab1e98e43cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738c43d49322491c2ee5b1cbf792f87e9577bdc7b8e828a430481ab1e98e43cc->enter($__internal_738c43d49322491c2ee5b1cbf792f87e9577bdc7b8e828a430481ab1e98e43cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_369dd8948bbac0aca4cf188b37e08eebc068c863f19cf32337775b97671eaa75->leave($__internal_369dd8948bbac0aca4cf188b37e08eebc068c863f19cf32337775b97671eaa75_prof);

        
        $__internal_738c43d49322491c2ee5b1cbf792f87e9577bdc7b8e828a430481ab1e98e43cc->leave($__internal_738c43d49322491c2ee5b1cbf792f87e9577bdc7b8e828a430481ab1e98e43cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
