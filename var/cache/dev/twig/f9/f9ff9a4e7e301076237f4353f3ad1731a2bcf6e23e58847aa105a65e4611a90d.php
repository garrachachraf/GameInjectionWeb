<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_53431dc3df8d939f5cf59e20bdc53842aa11c8fdb3d42a6c45a17a8bf937213f extends Twig_Template
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
        $__internal_bca9595b7c712b372dddbd61e9d03aa1b14ceacc14dfabe1a6bf45db7b2aeb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca9595b7c712b372dddbd61e9d03aa1b14ceacc14dfabe1a6bf45db7b2aeb1a->enter($__internal_bca9595b7c712b372dddbd61e9d03aa1b14ceacc14dfabe1a6bf45db7b2aeb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8033e0a73626be59d0479f6eaef82924d1650e8d97715057987b6ad2b7eb9585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8033e0a73626be59d0479f6eaef82924d1650e8d97715057987b6ad2b7eb9585->enter($__internal_8033e0a73626be59d0479f6eaef82924d1650e8d97715057987b6ad2b7eb9585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bca9595b7c712b372dddbd61e9d03aa1b14ceacc14dfabe1a6bf45db7b2aeb1a->leave($__internal_bca9595b7c712b372dddbd61e9d03aa1b14ceacc14dfabe1a6bf45db7b2aeb1a_prof);

        
        $__internal_8033e0a73626be59d0479f6eaef82924d1650e8d97715057987b6ad2b7eb9585->leave($__internal_8033e0a73626be59d0479f6eaef82924d1650e8d97715057987b6ad2b7eb9585_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
