<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f37504d08c7b74ee457cf5ea54d812efaa6783e257332b4edcf650eed1145fee extends Twig_Template
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
        $__internal_8b852fdb43a06e26460680452b2b469bc41ca68e4cc209683816d2ec10cdf63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b852fdb43a06e26460680452b2b469bc41ca68e4cc209683816d2ec10cdf63f->enter($__internal_8b852fdb43a06e26460680452b2b469bc41ca68e4cc209683816d2ec10cdf63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_372a836b474750148d0148b86bd4c3257eda136821641351f0f501fa51129385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372a836b474750148d0148b86bd4c3257eda136821641351f0f501fa51129385->enter($__internal_372a836b474750148d0148b86bd4c3257eda136821641351f0f501fa51129385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8b852fdb43a06e26460680452b2b469bc41ca68e4cc209683816d2ec10cdf63f->leave($__internal_8b852fdb43a06e26460680452b2b469bc41ca68e4cc209683816d2ec10cdf63f_prof);

        
        $__internal_372a836b474750148d0148b86bd4c3257eda136821641351f0f501fa51129385->leave($__internal_372a836b474750148d0148b86bd4c3257eda136821641351f0f501fa51129385_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
