<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1fc3d96efa07560a65a7a733f765cd8c2f7a286da5276fefd206333baa2146e6 extends Twig_Template
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
        $__internal_60a514daf24d679586fac9e6fe370bd773a8d98f14687c0eb7f6c545b1c4d19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a514daf24d679586fac9e6fe370bd773a8d98f14687c0eb7f6c545b1c4d19d->enter($__internal_60a514daf24d679586fac9e6fe370bd773a8d98f14687c0eb7f6c545b1c4d19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ef74fcb226414fbe2714985d851b771cb07c91357dd13b77d875a0fb139b189f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef74fcb226414fbe2714985d851b771cb07c91357dd13b77d875a0fb139b189f->enter($__internal_ef74fcb226414fbe2714985d851b771cb07c91357dd13b77d875a0fb139b189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_60a514daf24d679586fac9e6fe370bd773a8d98f14687c0eb7f6c545b1c4d19d->leave($__internal_60a514daf24d679586fac9e6fe370bd773a8d98f14687c0eb7f6c545b1c4d19d_prof);

        
        $__internal_ef74fcb226414fbe2714985d851b771cb07c91357dd13b77d875a0fb139b189f->leave($__internal_ef74fcb226414fbe2714985d851b771cb07c91357dd13b77d875a0fb139b189f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
