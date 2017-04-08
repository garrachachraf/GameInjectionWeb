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
        $__internal_d80da9f0db6f535687288b14def677ee645c206439e2869577d74b20d453a37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80da9f0db6f535687288b14def677ee645c206439e2869577d74b20d453a37d->enter($__internal_d80da9f0db6f535687288b14def677ee645c206439e2869577d74b20d453a37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_bea462b87ff1a9a34e8de3b46d4dd11d8a7369b277a9be7c40cf872798eb9b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea462b87ff1a9a34e8de3b46d4dd11d8a7369b277a9be7c40cf872798eb9b79->enter($__internal_bea462b87ff1a9a34e8de3b46d4dd11d8a7369b277a9be7c40cf872798eb9b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d80da9f0db6f535687288b14def677ee645c206439e2869577d74b20d453a37d->leave($__internal_d80da9f0db6f535687288b14def677ee645c206439e2869577d74b20d453a37d_prof);

        
        $__internal_bea462b87ff1a9a34e8de3b46d4dd11d8a7369b277a9be7c40cf872798eb9b79->leave($__internal_bea462b87ff1a9a34e8de3b46d4dd11d8a7369b277a9be7c40cf872798eb9b79_prof);

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
