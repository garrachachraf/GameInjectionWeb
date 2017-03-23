<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a8f5fd32080338a828ceb5d6ecefb5ac71707d377d368cb0d0eaa0c1672ca12a extends Twig_Template
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
        $__internal_afebf33eda85ff9b3d5431023eab006cfe134afb6781f66e3c9f74ede89e2b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afebf33eda85ff9b3d5431023eab006cfe134afb6781f66e3c9f74ede89e2b0a->enter($__internal_afebf33eda85ff9b3d5431023eab006cfe134afb6781f66e3c9f74ede89e2b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2cd81cd86a0987962da2f1b95cee269907305652ab93394360bdf2a9e337fe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd81cd86a0987962da2f1b95cee269907305652ab93394360bdf2a9e337fe85->enter($__internal_2cd81cd86a0987962da2f1b95cee269907305652ab93394360bdf2a9e337fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_afebf33eda85ff9b3d5431023eab006cfe134afb6781f66e3c9f74ede89e2b0a->leave($__internal_afebf33eda85ff9b3d5431023eab006cfe134afb6781f66e3c9f74ede89e2b0a_prof);

        
        $__internal_2cd81cd86a0987962da2f1b95cee269907305652ab93394360bdf2a9e337fe85->leave($__internal_2cd81cd86a0987962da2f1b95cee269907305652ab93394360bdf2a9e337fe85_prof);

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
