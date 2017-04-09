<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_94c17ed750e6da752c69a1c16927fb991a802512799f9f36f16420b23f04ce28 extends Twig_Template
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
        $__internal_8443b13c214562084129a211313602386cc3fd5822d59aa82812b3d83a6257bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8443b13c214562084129a211313602386cc3fd5822d59aa82812b3d83a6257bc->enter($__internal_8443b13c214562084129a211313602386cc3fd5822d59aa82812b3d83a6257bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cd8bc4e08c28375eb8f1b9677e8ce848d5f7fd568650a363d6c88cc6cb9a972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8bc4e08c28375eb8f1b9677e8ce848d5f7fd568650a363d6c88cc6cb9a972d->enter($__internal_cd8bc4e08c28375eb8f1b9677e8ce848d5f7fd568650a363d6c88cc6cb9a972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8443b13c214562084129a211313602386cc3fd5822d59aa82812b3d83a6257bc->leave($__internal_8443b13c214562084129a211313602386cc3fd5822d59aa82812b3d83a6257bc_prof);

        
        $__internal_cd8bc4e08c28375eb8f1b9677e8ce848d5f7fd568650a363d6c88cc6cb9a972d->leave($__internal_cd8bc4e08c28375eb8f1b9677e8ce848d5f7fd568650a363d6c88cc6cb9a972d_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
