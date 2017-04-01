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
        $__internal_0d131e2c2ac41d212ad9c30953b175769f3f194e3f6b3aedd51efd285fa5d228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d131e2c2ac41d212ad9c30953b175769f3f194e3f6b3aedd51efd285fa5d228->enter($__internal_0d131e2c2ac41d212ad9c30953b175769f3f194e3f6b3aedd51efd285fa5d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_865b685f4c552aa0628e3ebeae14259fc1cef40bb00bf097ef9a09cd55778d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865b685f4c552aa0628e3ebeae14259fc1cef40bb00bf097ef9a09cd55778d1a->enter($__internal_865b685f4c552aa0628e3ebeae14259fc1cef40bb00bf097ef9a09cd55778d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0d131e2c2ac41d212ad9c30953b175769f3f194e3f6b3aedd51efd285fa5d228->leave($__internal_0d131e2c2ac41d212ad9c30953b175769f3f194e3f6b3aedd51efd285fa5d228_prof);

        
        $__internal_865b685f4c552aa0628e3ebeae14259fc1cef40bb00bf097ef9a09cd55778d1a->leave($__internal_865b685f4c552aa0628e3ebeae14259fc1cef40bb00bf097ef9a09cd55778d1a_prof);

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
