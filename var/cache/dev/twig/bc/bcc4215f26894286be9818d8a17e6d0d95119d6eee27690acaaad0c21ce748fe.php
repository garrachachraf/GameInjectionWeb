<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e19ea76a60e5be49992480d2fd5ec599b27f3bc16dd6707048d906d597d9bd53 extends Twig_Template
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
        $__internal_ab7d51121c642fbe061a8405c69f51d849a64232b1d5e0f828052767ec83b7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7d51121c642fbe061a8405c69f51d849a64232b1d5e0f828052767ec83b7fb->enter($__internal_ab7d51121c642fbe061a8405c69f51d849a64232b1d5e0f828052767ec83b7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d62b14eee4a97b076b71048aa696ee2ff5523063c94f6be7848ca8ef685e0601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62b14eee4a97b076b71048aa696ee2ff5523063c94f6be7848ca8ef685e0601->enter($__internal_d62b14eee4a97b076b71048aa696ee2ff5523063c94f6be7848ca8ef685e0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ab7d51121c642fbe061a8405c69f51d849a64232b1d5e0f828052767ec83b7fb->leave($__internal_ab7d51121c642fbe061a8405c69f51d849a64232b1d5e0f828052767ec83b7fb_prof);

        
        $__internal_d62b14eee4a97b076b71048aa696ee2ff5523063c94f6be7848ca8ef685e0601->leave($__internal_d62b14eee4a97b076b71048aa696ee2ff5523063c94f6be7848ca8ef685e0601_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
