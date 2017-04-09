<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_91d19ba13a829cda433e27349cfec9bc9e62ad91468148f2d41865fae4daa0aa extends Twig_Template
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
        $__internal_262f25f8d4759955e735f9cfc9e21a9ba68895e0d29244c5a2f46c89240bdaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262f25f8d4759955e735f9cfc9e21a9ba68895e0d29244c5a2f46c89240bdaf5->enter($__internal_262f25f8d4759955e735f9cfc9e21a9ba68895e0d29244c5a2f46c89240bdaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f62ca45de281f2a2e3b322ae99a63888e912a5dea003ab5e4598749dfa2ba30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62ca45de281f2a2e3b322ae99a63888e912a5dea003ab5e4598749dfa2ba30d->enter($__internal_f62ca45de281f2a2e3b322ae99a63888e912a5dea003ab5e4598749dfa2ba30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_262f25f8d4759955e735f9cfc9e21a9ba68895e0d29244c5a2f46c89240bdaf5->leave($__internal_262f25f8d4759955e735f9cfc9e21a9ba68895e0d29244c5a2f46c89240bdaf5_prof);

        
        $__internal_f62ca45de281f2a2e3b322ae99a63888e912a5dea003ab5e4598749dfa2ba30d->leave($__internal_f62ca45de281f2a2e3b322ae99a63888e912a5dea003ab5e4598749dfa2ba30d_prof);

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
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
