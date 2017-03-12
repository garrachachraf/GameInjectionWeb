<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_f9e50d389106297ec87c89bd9d368e05b55671490a965220b6db89805d98f01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e50d389106297ec87c89bd9d368e05b55671490a965220b6db89805d98f01e->enter($__internal_f9e50d389106297ec87c89bd9d368e05b55671490a965220b6db89805d98f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_750629bc29008008c403053d8acc4b677450fc79b44e6b80bd2aa9e179a756c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750629bc29008008c403053d8acc4b677450fc79b44e6b80bd2aa9e179a756c5->enter($__internal_750629bc29008008c403053d8acc4b677450fc79b44e6b80bd2aa9e179a756c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f9e50d389106297ec87c89bd9d368e05b55671490a965220b6db89805d98f01e->leave($__internal_f9e50d389106297ec87c89bd9d368e05b55671490a965220b6db89805d98f01e_prof);

        
        $__internal_750629bc29008008c403053d8acc4b677450fc79b44e6b80bd2aa9e179a756c5->leave($__internal_750629bc29008008c403053d8acc4b677450fc79b44e6b80bd2aa9e179a756c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
