<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c056c8a56280ec1e36bb26e6d4aeee590f26b0e947e0ed3576d6230e1125e8b7 extends Twig_Template
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
        $__internal_5b2079c7be24bc0c272cbff4e99622ae22a120e9e595e354a41843f0c6745ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2079c7be24bc0c272cbff4e99622ae22a120e9e595e354a41843f0c6745ae9->enter($__internal_5b2079c7be24bc0c272cbff4e99622ae22a120e9e595e354a41843f0c6745ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b47b0834854a7a9896ea9a1925dd36ac7f106da574f535c4e0f2630ebe30750a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47b0834854a7a9896ea9a1925dd36ac7f106da574f535c4e0f2630ebe30750a->enter($__internal_b47b0834854a7a9896ea9a1925dd36ac7f106da574f535c4e0f2630ebe30750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5b2079c7be24bc0c272cbff4e99622ae22a120e9e595e354a41843f0c6745ae9->leave($__internal_5b2079c7be24bc0c272cbff4e99622ae22a120e9e595e354a41843f0c6745ae9_prof);

        
        $__internal_b47b0834854a7a9896ea9a1925dd36ac7f106da574f535c4e0f2630ebe30750a->leave($__internal_b47b0834854a7a9896ea9a1925dd36ac7f106da574f535c4e0f2630ebe30750a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
