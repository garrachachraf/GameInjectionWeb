<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a3d668d321c94361a08a6b016b000fbb6cf2fe4320aa72ec89c2b42ce29ba02e extends Twig_Template
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
        $__internal_45c1406d872a6a5651561af56e2b8aae663c11da0a5d2c79989d733347696320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c1406d872a6a5651561af56e2b8aae663c11da0a5d2c79989d733347696320->enter($__internal_45c1406d872a6a5651561af56e2b8aae663c11da0a5d2c79989d733347696320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_91beb94308975fd2e0ad4bddc3ffefa34a4b34af203a9a6f120c244bc2738e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91beb94308975fd2e0ad4bddc3ffefa34a4b34af203a9a6f120c244bc2738e55->enter($__internal_91beb94308975fd2e0ad4bddc3ffefa34a4b34af203a9a6f120c244bc2738e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_45c1406d872a6a5651561af56e2b8aae663c11da0a5d2c79989d733347696320->leave($__internal_45c1406d872a6a5651561af56e2b8aae663c11da0a5d2c79989d733347696320_prof);

        
        $__internal_91beb94308975fd2e0ad4bddc3ffefa34a4b34af203a9a6f120c244bc2738e55->leave($__internal_91beb94308975fd2e0ad4bddc3ffefa34a4b34af203a9a6f120c244bc2738e55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
