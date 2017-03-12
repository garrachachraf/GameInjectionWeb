<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_73c959ae63505265bc87604813629e6c0806b238828f1281c54c899278524acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c959ae63505265bc87604813629e6c0806b238828f1281c54c899278524acb->enter($__internal_73c959ae63505265bc87604813629e6c0806b238828f1281c54c899278524acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0a40e065992737a722e06f43cca8c7109f69e48c2b7f178005029f6b17ed1b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a40e065992737a722e06f43cca8c7109f69e48c2b7f178005029f6b17ed1b3b->enter($__internal_0a40e065992737a722e06f43cca8c7109f69e48c2b7f178005029f6b17ed1b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_73c959ae63505265bc87604813629e6c0806b238828f1281c54c899278524acb->leave($__internal_73c959ae63505265bc87604813629e6c0806b238828f1281c54c899278524acb_prof);

        
        $__internal_0a40e065992737a722e06f43cca8c7109f69e48c2b7f178005029f6b17ed1b3b->leave($__internal_0a40e065992737a722e06f43cca8c7109f69e48c2b7f178005029f6b17ed1b3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
