<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_ca4f2c61c09b81a8c30b636117b62f2cc9fde4afc52a7ffbd9fc0bf3ae75cf9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4f2c61c09b81a8c30b636117b62f2cc9fde4afc52a7ffbd9fc0bf3ae75cf9f->enter($__internal_ca4f2c61c09b81a8c30b636117b62f2cc9fde4afc52a7ffbd9fc0bf3ae75cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_624799a20d2c35ca4ac25a38ef5843befd6f7e0fe4493a59bf7f131d76b7add3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624799a20d2c35ca4ac25a38ef5843befd6f7e0fe4493a59bf7f131d76b7add3->enter($__internal_624799a20d2c35ca4ac25a38ef5843befd6f7e0fe4493a59bf7f131d76b7add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ca4f2c61c09b81a8c30b636117b62f2cc9fde4afc52a7ffbd9fc0bf3ae75cf9f->leave($__internal_ca4f2c61c09b81a8c30b636117b62f2cc9fde4afc52a7ffbd9fc0bf3ae75cf9f_prof);

        
        $__internal_624799a20d2c35ca4ac25a38ef5843befd6f7e0fe4493a59bf7f131d76b7add3->leave($__internal_624799a20d2c35ca4ac25a38ef5843befd6f7e0fe4493a59bf7f131d76b7add3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
