<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8dc7899089464b7fff231a3d6dcd28a98176aab822963d0c8a6f5ab357474852 extends Twig_Template
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
        $__internal_52a561f5c6d83ad57e18c3bd357641c65e4a2a6875c81eca896560c9bfeffb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a561f5c6d83ad57e18c3bd357641c65e4a2a6875c81eca896560c9bfeffb1f->enter($__internal_52a561f5c6d83ad57e18c3bd357641c65e4a2a6875c81eca896560c9bfeffb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f8f03b434f97bfba4a473dd274e9d43170c0f5ed7a884457da1f5febcf22dcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f03b434f97bfba4a473dd274e9d43170c0f5ed7a884457da1f5febcf22dcd2->enter($__internal_f8f03b434f97bfba4a473dd274e9d43170c0f5ed7a884457da1f5febcf22dcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_52a561f5c6d83ad57e18c3bd357641c65e4a2a6875c81eca896560c9bfeffb1f->leave($__internal_52a561f5c6d83ad57e18c3bd357641c65e4a2a6875c81eca896560c9bfeffb1f_prof);

        
        $__internal_f8f03b434f97bfba4a473dd274e9d43170c0f5ed7a884457da1f5febcf22dcd2->leave($__internal_f8f03b434f97bfba4a473dd274e9d43170c0f5ed7a884457da1f5febcf22dcd2_prof);

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
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
