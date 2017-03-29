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
        $__internal_a223bde0fd4315cd4b57117619c5ce749165a723091f51a238e4d7f0a704b767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a223bde0fd4315cd4b57117619c5ce749165a723091f51a238e4d7f0a704b767->enter($__internal_a223bde0fd4315cd4b57117619c5ce749165a723091f51a238e4d7f0a704b767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cde2316fe5afcd9805f36472730c5ada62ca9bd94d189f251bb8283421daa048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde2316fe5afcd9805f36472730c5ada62ca9bd94d189f251bb8283421daa048->enter($__internal_cde2316fe5afcd9805f36472730c5ada62ca9bd94d189f251bb8283421daa048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a223bde0fd4315cd4b57117619c5ce749165a723091f51a238e4d7f0a704b767->leave($__internal_a223bde0fd4315cd4b57117619c5ce749165a723091f51a238e4d7f0a704b767_prof);

        
        $__internal_cde2316fe5afcd9805f36472730c5ada62ca9bd94d189f251bb8283421daa048->leave($__internal_cde2316fe5afcd9805f36472730c5ada62ca9bd94d189f251bb8283421daa048_prof);

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
