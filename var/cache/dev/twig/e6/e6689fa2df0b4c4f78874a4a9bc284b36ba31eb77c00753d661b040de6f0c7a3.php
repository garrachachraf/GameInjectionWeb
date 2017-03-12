<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_4fd5a5a1190c6098e6be93837e9349e1d5809ceb99a9d03f031f2179421b7c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd5a5a1190c6098e6be93837e9349e1d5809ceb99a9d03f031f2179421b7c21->enter($__internal_4fd5a5a1190c6098e6be93837e9349e1d5809ceb99a9d03f031f2179421b7c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ffa6e6439ef01bf7efb0e6c8fb84077da24c1f0084dddb4c7983a5bd093d9e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa6e6439ef01bf7efb0e6c8fb84077da24c1f0084dddb4c7983a5bd093d9e6f->enter($__internal_ffa6e6439ef01bf7efb0e6c8fb84077da24c1f0084dddb4c7983a5bd093d9e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4fd5a5a1190c6098e6be93837e9349e1d5809ceb99a9d03f031f2179421b7c21->leave($__internal_4fd5a5a1190c6098e6be93837e9349e1d5809ceb99a9d03f031f2179421b7c21_prof);

        
        $__internal_ffa6e6439ef01bf7efb0e6c8fb84077da24c1f0084dddb4c7983a5bd093d9e6f->leave($__internal_ffa6e6439ef01bf7efb0e6c8fb84077da24c1f0084dddb4c7983a5bd093d9e6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
