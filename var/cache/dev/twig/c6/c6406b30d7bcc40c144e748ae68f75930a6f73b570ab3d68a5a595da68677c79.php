<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bdfebe2f35f2462d0a22b73f78664045790a8ed3b94492e78b435c5a27e6ca08 extends Twig_Template
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
        $__internal_d9e2700c7d5fb9eb4269377d510edfcec6523ae94672a2fd46948039ae3e3036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e2700c7d5fb9eb4269377d510edfcec6523ae94672a2fd46948039ae3e3036->enter($__internal_d9e2700c7d5fb9eb4269377d510edfcec6523ae94672a2fd46948039ae3e3036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f8e2286975360802c3af3ec93b92776ee63a36a65141cbedcfe98cc7b5b9aa4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e2286975360802c3af3ec93b92776ee63a36a65141cbedcfe98cc7b5b9aa4f->enter($__internal_f8e2286975360802c3af3ec93b92776ee63a36a65141cbedcfe98cc7b5b9aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d9e2700c7d5fb9eb4269377d510edfcec6523ae94672a2fd46948039ae3e3036->leave($__internal_d9e2700c7d5fb9eb4269377d510edfcec6523ae94672a2fd46948039ae3e3036_prof);

        
        $__internal_f8e2286975360802c3af3ec93b92776ee63a36a65141cbedcfe98cc7b5b9aa4f->leave($__internal_f8e2286975360802c3af3ec93b92776ee63a36a65141cbedcfe98cc7b5b9aa4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
