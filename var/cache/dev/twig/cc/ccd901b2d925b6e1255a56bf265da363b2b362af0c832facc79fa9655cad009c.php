<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_36fdb6866ae8a74578e27cae2f8b324358ddb8daa8a1da38827ab364bf799c46 extends Twig_Template
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
        $__internal_030e85e8ca88e526a790a99f8e3d8c9fe3e04d4993c0622fbe25e1eee60fdfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030e85e8ca88e526a790a99f8e3d8c9fe3e04d4993c0622fbe25e1eee60fdfca->enter($__internal_030e85e8ca88e526a790a99f8e3d8c9fe3e04d4993c0622fbe25e1eee60fdfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_39a7a8e179bb57a4421e53f86b76e00c441541c756c42e6ed1008582e6a3f0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a7a8e179bb57a4421e53f86b76e00c441541c756c42e6ed1008582e6a3f0de->enter($__internal_39a7a8e179bb57a4421e53f86b76e00c441541c756c42e6ed1008582e6a3f0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_030e85e8ca88e526a790a99f8e3d8c9fe3e04d4993c0622fbe25e1eee60fdfca->leave($__internal_030e85e8ca88e526a790a99f8e3d8c9fe3e04d4993c0622fbe25e1eee60fdfca_prof);

        
        $__internal_39a7a8e179bb57a4421e53f86b76e00c441541c756c42e6ed1008582e6a3f0de->leave($__internal_39a7a8e179bb57a4421e53f86b76e00c441541c756c42e6ed1008582e6a3f0de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
