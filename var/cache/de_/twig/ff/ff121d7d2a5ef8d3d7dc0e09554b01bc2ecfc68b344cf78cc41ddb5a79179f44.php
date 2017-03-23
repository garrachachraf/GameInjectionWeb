<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c1ad68cc5ae486936961bb10386c5815d72196d16180f6e5eef6fed14a30e991 extends Twig_Template
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
        $__internal_66f7ec56492c86a185acd94510f2ecc85ef4530e9dbc4eda16a2441981619307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f7ec56492c86a185acd94510f2ecc85ef4530e9dbc4eda16a2441981619307->enter($__internal_66f7ec56492c86a185acd94510f2ecc85ef4530e9dbc4eda16a2441981619307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b06812b9e1fe2fb3772a1b513ffb36cf1265df3fb1e8c406d11f0e4d4230788a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06812b9e1fe2fb3772a1b513ffb36cf1265df3fb1e8c406d11f0e4d4230788a->enter($__internal_b06812b9e1fe2fb3772a1b513ffb36cf1265df3fb1e8c406d11f0e4d4230788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_66f7ec56492c86a185acd94510f2ecc85ef4530e9dbc4eda16a2441981619307->leave($__internal_66f7ec56492c86a185acd94510f2ecc85ef4530e9dbc4eda16a2441981619307_prof);

        
        $__internal_b06812b9e1fe2fb3772a1b513ffb36cf1265df3fb1e8c406d11f0e4d4230788a->leave($__internal_b06812b9e1fe2fb3772a1b513ffb36cf1265df3fb1e8c406d11f0e4d4230788a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
