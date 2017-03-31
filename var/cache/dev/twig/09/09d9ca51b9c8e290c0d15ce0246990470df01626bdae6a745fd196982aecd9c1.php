<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6a96694063b99000170913066856a5441daf174cef5bf2bfaaf4333eedb33695 extends Twig_Template
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
        $__internal_0b4279769cba760570b098f70e4f7f81a2ec615661a291195fb8246fa31d4402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4279769cba760570b098f70e4f7f81a2ec615661a291195fb8246fa31d4402->enter($__internal_0b4279769cba760570b098f70e4f7f81a2ec615661a291195fb8246fa31d4402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_27839d9434b790c82eae9a7e3864d21417f382a461c52819cfc1120c3e273990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27839d9434b790c82eae9a7e3864d21417f382a461c52819cfc1120c3e273990->enter($__internal_27839d9434b790c82eae9a7e3864d21417f382a461c52819cfc1120c3e273990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0b4279769cba760570b098f70e4f7f81a2ec615661a291195fb8246fa31d4402->leave($__internal_0b4279769cba760570b098f70e4f7f81a2ec615661a291195fb8246fa31d4402_prof);

        
        $__internal_27839d9434b790c82eae9a7e3864d21417f382a461c52819cfc1120c3e273990->leave($__internal_27839d9434b790c82eae9a7e3864d21417f382a461c52819cfc1120c3e273990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
