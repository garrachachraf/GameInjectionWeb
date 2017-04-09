<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ecead2131b0ab2b5a134b4df1ec4009c6f9c06d59d5e7f7f93a842b32f2e1dea extends Twig_Template
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
        $__internal_e88320ac5d55b91ec15701f679bc94d90de7a1817ccb25e4d89f9cf40da37fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88320ac5d55b91ec15701f679bc94d90de7a1817ccb25e4d89f9cf40da37fc4->enter($__internal_e88320ac5d55b91ec15701f679bc94d90de7a1817ccb25e4d89f9cf40da37fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dfd74411bc288195c640d69b73239ea94faf3b55accfacb2085018aa5d1d70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd74411bc288195c640d69b73239ea94faf3b55accfacb2085018aa5d1d70b3->enter($__internal_dfd74411bc288195c640d69b73239ea94faf3b55accfacb2085018aa5d1d70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e88320ac5d55b91ec15701f679bc94d90de7a1817ccb25e4d89f9cf40da37fc4->leave($__internal_e88320ac5d55b91ec15701f679bc94d90de7a1817ccb25e4d89f9cf40da37fc4_prof);

        
        $__internal_dfd74411bc288195c640d69b73239ea94faf3b55accfacb2085018aa5d1d70b3->leave($__internal_dfd74411bc288195c640d69b73239ea94faf3b55accfacb2085018aa5d1d70b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
