<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9a0f527a1f521930a70e8f3cf4647ddddfa3ecec3857aedfe220c9ce417cdf3c extends Twig_Template
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
        $__internal_28207136a49e319f78987f4a4d78703a4bf8aff179b739ea341e80c01cb0df77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28207136a49e319f78987f4a4d78703a4bf8aff179b739ea341e80c01cb0df77->enter($__internal_28207136a49e319f78987f4a4d78703a4bf8aff179b739ea341e80c01cb0df77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_66139be16658f0f08f3d9b924c14e53482c981a8c82ee8f50533c86914b9b312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66139be16658f0f08f3d9b924c14e53482c981a8c82ee8f50533c86914b9b312->enter($__internal_66139be16658f0f08f3d9b924c14e53482c981a8c82ee8f50533c86914b9b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_28207136a49e319f78987f4a4d78703a4bf8aff179b739ea341e80c01cb0df77->leave($__internal_28207136a49e319f78987f4a4d78703a4bf8aff179b739ea341e80c01cb0df77_prof);

        
        $__internal_66139be16658f0f08f3d9b924c14e53482c981a8c82ee8f50533c86914b9b312->leave($__internal_66139be16658f0f08f3d9b924c14e53482c981a8c82ee8f50533c86914b9b312_prof);

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
