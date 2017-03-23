<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fbec2c376f212600105846c348f93db19590a114bdfb973bf78719d0e66c0fe7 extends Twig_Template
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
        $__internal_3cf95c5a1909ce04e50b215f47dec6e58aa11c280f04f82d3baf97692cea0b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf95c5a1909ce04e50b215f47dec6e58aa11c280f04f82d3baf97692cea0b2a->enter($__internal_3cf95c5a1909ce04e50b215f47dec6e58aa11c280f04f82d3baf97692cea0b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ea8c2aa6ec30e00033554bfd10cf7cf919636aa468df0dc9a7d2a217faebb0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c2aa6ec30e00033554bfd10cf7cf919636aa468df0dc9a7d2a217faebb0b7->enter($__internal_ea8c2aa6ec30e00033554bfd10cf7cf919636aa468df0dc9a7d2a217faebb0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3cf95c5a1909ce04e50b215f47dec6e58aa11c280f04f82d3baf97692cea0b2a->leave($__internal_3cf95c5a1909ce04e50b215f47dec6e58aa11c280f04f82d3baf97692cea0b2a_prof);

        
        $__internal_ea8c2aa6ec30e00033554bfd10cf7cf919636aa468df0dc9a7d2a217faebb0b7->leave($__internal_ea8c2aa6ec30e00033554bfd10cf7cf919636aa468df0dc9a7d2a217faebb0b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
