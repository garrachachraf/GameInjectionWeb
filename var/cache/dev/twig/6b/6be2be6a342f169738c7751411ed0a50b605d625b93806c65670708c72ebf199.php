<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_0506761c9dba2ac57f6d6f2f37e1038a6c8dbe9479b41bc93d313d44660c271c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0506761c9dba2ac57f6d6f2f37e1038a6c8dbe9479b41bc93d313d44660c271c->enter($__internal_0506761c9dba2ac57f6d6f2f37e1038a6c8dbe9479b41bc93d313d44660c271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_344c79516365845b545f155691c7b8e266080762f66e190420cdfd367b163827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344c79516365845b545f155691c7b8e266080762f66e190420cdfd367b163827->enter($__internal_344c79516365845b545f155691c7b8e266080762f66e190420cdfd367b163827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0506761c9dba2ac57f6d6f2f37e1038a6c8dbe9479b41bc93d313d44660c271c->leave($__internal_0506761c9dba2ac57f6d6f2f37e1038a6c8dbe9479b41bc93d313d44660c271c_prof);

        
        $__internal_344c79516365845b545f155691c7b8e266080762f66e190420cdfd367b163827->leave($__internal_344c79516365845b545f155691c7b8e266080762f66e190420cdfd367b163827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
