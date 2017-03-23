<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bbcd5aead12958ac8601a959a995da9e80d4371ce54699c48ac8cb1436fafadb extends Twig_Template
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
        $__internal_666947872417c69fd4228ef5456e624ee34a5cd452fc78fe9ddec289728b0320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666947872417c69fd4228ef5456e624ee34a5cd452fc78fe9ddec289728b0320->enter($__internal_666947872417c69fd4228ef5456e624ee34a5cd452fc78fe9ddec289728b0320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_db40364f233a031bdf7dd95ee6cb78b5001e2a75ce67f4aec5db98e8b1c28e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db40364f233a031bdf7dd95ee6cb78b5001e2a75ce67f4aec5db98e8b1c28e6d->enter($__internal_db40364f233a031bdf7dd95ee6cb78b5001e2a75ce67f4aec5db98e8b1c28e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_666947872417c69fd4228ef5456e624ee34a5cd452fc78fe9ddec289728b0320->leave($__internal_666947872417c69fd4228ef5456e624ee34a5cd452fc78fe9ddec289728b0320_prof);

        
        $__internal_db40364f233a031bdf7dd95ee6cb78b5001e2a75ce67f4aec5db98e8b1c28e6d->leave($__internal_db40364f233a031bdf7dd95ee6cb78b5001e2a75ce67f4aec5db98e8b1c28e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
