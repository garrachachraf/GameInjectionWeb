<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4aa0a1014bb89dfefc4ca30cd0aac65fe24148b2e9ea07096eae4e76d841b2f1 extends Twig_Template
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
        $__internal_02490e9bcf9b2fc157242b18986f4a5090e1ca056222158fc0bef7f7f63d9959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02490e9bcf9b2fc157242b18986f4a5090e1ca056222158fc0bef7f7f63d9959->enter($__internal_02490e9bcf9b2fc157242b18986f4a5090e1ca056222158fc0bef7f7f63d9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1bcb5db0f416d3401dfccec0f800c1be1494f37fc0d98797a56c0320a3b21977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcb5db0f416d3401dfccec0f800c1be1494f37fc0d98797a56c0320a3b21977->enter($__internal_1bcb5db0f416d3401dfccec0f800c1be1494f37fc0d98797a56c0320a3b21977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_02490e9bcf9b2fc157242b18986f4a5090e1ca056222158fc0bef7f7f63d9959->leave($__internal_02490e9bcf9b2fc157242b18986f4a5090e1ca056222158fc0bef7f7f63d9959_prof);

        
        $__internal_1bcb5db0f416d3401dfccec0f800c1be1494f37fc0d98797a56c0320a3b21977->leave($__internal_1bcb5db0f416d3401dfccec0f800c1be1494f37fc0d98797a56c0320a3b21977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
