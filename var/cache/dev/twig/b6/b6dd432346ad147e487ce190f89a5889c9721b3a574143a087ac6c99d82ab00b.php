<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_776bf82219aa036999a0134b5e3aa93fccacf1b96b427e72693c8fe171a00450 extends Twig_Template
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
        $__internal_54afc8ab9ed9a9191ff94ae823f6eee4f362b9604ae085d79279058eec81bdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54afc8ab9ed9a9191ff94ae823f6eee4f362b9604ae085d79279058eec81bdfd->enter($__internal_54afc8ab9ed9a9191ff94ae823f6eee4f362b9604ae085d79279058eec81bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_98dbd7bf39ed69965360fbc3875e33d30265d9b32fdec67d95ba810d49721a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dbd7bf39ed69965360fbc3875e33d30265d9b32fdec67d95ba810d49721a18->enter($__internal_98dbd7bf39ed69965360fbc3875e33d30265d9b32fdec67d95ba810d49721a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_54afc8ab9ed9a9191ff94ae823f6eee4f362b9604ae085d79279058eec81bdfd->leave($__internal_54afc8ab9ed9a9191ff94ae823f6eee4f362b9604ae085d79279058eec81bdfd_prof);

        
        $__internal_98dbd7bf39ed69965360fbc3875e33d30265d9b32fdec67d95ba810d49721a18->leave($__internal_98dbd7bf39ed69965360fbc3875e33d30265d9b32fdec67d95ba810d49721a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
