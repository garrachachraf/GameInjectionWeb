<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61527599f1b475fa210386663620b0946261ed9584f826e23e33dd4604fb2a6e extends Twig_Template
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
        $__internal_2a5a2025fc9bdd47dbc440f5b86188dd45a9db95bef335d7ceeec7826caeeb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5a2025fc9bdd47dbc440f5b86188dd45a9db95bef335d7ceeec7826caeeb1f->enter($__internal_2a5a2025fc9bdd47dbc440f5b86188dd45a9db95bef335d7ceeec7826caeeb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c12a23210ff63579111c5ef12c2d85895a75ea2213de5a06e278177677f68558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12a23210ff63579111c5ef12c2d85895a75ea2213de5a06e278177677f68558->enter($__internal_c12a23210ff63579111c5ef12c2d85895a75ea2213de5a06e278177677f68558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2a5a2025fc9bdd47dbc440f5b86188dd45a9db95bef335d7ceeec7826caeeb1f->leave($__internal_2a5a2025fc9bdd47dbc440f5b86188dd45a9db95bef335d7ceeec7826caeeb1f_prof);

        
        $__internal_c12a23210ff63579111c5ef12c2d85895a75ea2213de5a06e278177677f68558->leave($__internal_c12a23210ff63579111c5ef12c2d85895a75ea2213de5a06e278177677f68558_prof);

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
", "@Framework/Form/form_end.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
